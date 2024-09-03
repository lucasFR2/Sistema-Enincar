<?php
include_once('config-db.php');

$worker = filter_input(INPUT_POST, 'worker', FILTER_SANITIZE_SPECIAL_CHARS);
$client = filter_input(INPUT_POST, 'client', FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle = filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_SPECIAL_CHARS);
$name_service = filter_input(INPUT_POST, 'name_service', FILTER_SANITIZE_SPECIAL_CHARS);
$service_date = filter_input(INPUT_POST, 'service_date', FILTER_SANITIZE_SPECIAL_CHARS);
$service_value = filter_input(INPUT_POST, 'service_value', FILTER_VALIDATE_FLOAT);
$qtd = filter_input(INPUT_POST, 'qtd', FILTER_VALIDATE_INT);

if ($worker !== false && $client !== false && $vehicle !== false && $name_service !== false && $service_date !== false && $service_value !== false && $qtd !== false) {
    $sql = "SELECT * FROM services WHERE client = ? AND vehicle = ? AND service_date = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $client, $vehicle, $service_date);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nova_quantidade = $row['qtd'] + $qtd;
        $novo_valor = $row['service_value'] + $service_value;
        $update_sql = "UPDATE services SET qtd = ?, service_value = ? WHERE client = ? AND vehicle = ? AND service_date = ?";
        $update_stmt = $connection->prepare($update_sql);
        $update_stmt->bind_param("idsss", $nova_quantidade, $novo_valor, $client, $vehicle, $service_date);
        $update_stmt->execute();
        echo "Serviço atualizado com sucesso!";
    } else {
        $insert_sql = "INSERT INTO services (worker, client, vehicle, name_service, service_date, service_value, qtd) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = $connection->prepare($insert_sql);
        $insert_stmt->bind_param("sssssid", $worker, $client, $vehicle, $name_service, $service_date, $service_value, $qtd);
        $insert_stmt->execute();
        echo "Serviço inserido com sucesso!";
    }

    $stmt->close();
    $connection->close();

    header("Location: services-panel.php");
    exit();
} else {
    echo "Dados inválidos fornecidos.";
}
?>
