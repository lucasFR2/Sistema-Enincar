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
<body><br>
<h2>Peças Cadastradas</h2><br>
<table>
    <tr>
        <th>ID</th>
        <th>Quantidade</th>
        <th>Nome</th>
        <th>Marca do Carro</th>
        <th>Carro</th>
        <th>Valor (p/ UND)</th>
    </tr>
    <?php
    require_once 'config-db.php';

    $sql = "SELECT id, qtd, product_name, brand, vehicle, product_value FROM product";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['qtd'] . "</td>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['brand'] . "</td>";
            echo "<td>" . $row['vehicle'] . "</td>";
            echo "<td>" . $row['product_value'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    mysqli_close($connection);
    ?>
</table>

</body>
</html>
