<!DOCTYPE html>
<html>
<head>
<style>
   form{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
   }
</style>
</head>
<body>
<form action="processform.php" method="POST">
    <br>
    <p>Quantidade <input type="text" name="qtd" id="qtd"></p><br>
    <p>Nome <input type="text" name="product_name" id="product_name"></p><br>
    <p>Marca <input type="text" name="brand" id="brand"></p><br>
    <p>Veículo <input type="text" name="vehicle" id="vehicle"></p><br>
    <p>Valor <input type="text" name="product_value" id="product_value"></p><br>
    <p><input type="submit" value="Adicionar"></p>
</form>
</body>
</html>
