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
<form action="process_services.php" method="POST">
    <br>
    <p>Quem realizou o serviço <input type="text" name="worker" id="worker" required></p><br>
    <p>Nome Cliente <input type="text" name="client" id="client" required></p><br>
    <p>Veículo <input type="text" name="vehicle" id="vehicle" required></p><br>
    <p>Serviço <input type="text" name="name_service" id="name_service" required></p><br>
    <p>Data <input type="date" name="service_date" id="service_date" required></p><br>
    <p>Valor <input type="number" step="0.01" name="service_value" id="service_value" required></p><br>
    <p>Quantidade <input type="number" name="qtd" id="qtd" required></p><br>
    <p><input type="submit" value="Adicionar"></p>
</form>
</body>
</html>
