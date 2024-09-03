<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<br>
<h2>Serviços Cadastrados</h2>
<br>
<table>
    <tr>
        <th>ID</th>
        <th>Trabalhador</th>
        <th>Cliente</th>
        <th>Veículo</th>
        <th>Nome do Serviço</th>
        <th>Data do Serviço</th>
        <th>Valor do Serviço</th>
        <th>Quantidade</th>
    </tr>
    <?php
    require_once 'config-db.php';

    $sql = "SELECT id, worker, client, vehicle, name_service, service_date, service_value, qtd FROM services";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['worker']) . "</td>";
            echo "<td>" . htmlspecialchars($row['client']) . "</td>";
            echo "<td>" . htmlspecialchars($row['vehicle']) . "</td>";
            echo "<td>" . htmlspecialchars($row['name_service']) . "</td>";
            echo "<td>" . htmlspecialchars($row['service_date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['service_value']) . "</td>";
            echo "<td>" . htmlspecialchars($row['qtd']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>Nenhum resultado encontrado.</td></tr>";
    }

    mysqli_close($connection);
    ?>
</table>

</body>
</html>
