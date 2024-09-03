<?php
include_once('config-db.php');

$qtd = filter_input(INPUT_POST, 'qtd', FILTER_VALIDATE_INT);
$product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_SPECIAL_CHARS);
$brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_SPECIAL_CHARS);
$vehicle = filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_SPECIAL_CHARS);
$product_value = filter_input(INPUT_POST, 'product_value', FILTER_VALIDATE_FLOAT);

if ($qtd !== false && $product_name !== false && $brand !== false && $vehicle !== false && $product_value !== false) {
    $sql = "SELECT * FROM product WHERE product_name = ? AND brand = ? AND vehicle = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $product_name, $brand, $vehicle);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nova_quantidade = $row['qtd'] + $qtd;
        $update_sql = "UPDATE product SET qtd = ?, product_value = ? WHERE product_name = ? AND brand = ? AND vehicle = ?";
        $update_stmt = $connection->prepare($update_sql);
        $update_stmt->bind_param("idsss", $nova_quantidade, $product_value, $product_name, $brand, $vehicle);
        $update_stmt->execute();
    } else {
        $insert_sql = "INSERT INTO product (qtd, product_name, brand, vehicle, product_value) VALUES (?, ?, ?, ?, ?)";
        $insert_stmt = $connection->prepare($insert_sql);
        $insert_stmt->bind_param("isssd", $qtd, $product_name, $brand, $vehicle, $product_value);
        $insert_stmt->execute();
    }
    
    header("Location: products.php");
    exit();

    $stmt->close();
    $connection->close();
} 
?>
