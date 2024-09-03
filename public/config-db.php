<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'lulukio9090';
    $db_name = 'enincardb';

    $connection = new mysqli($host, $username, $password, $db_name);

    //teste de conexão com o banco de dados
    /*if($connection->connect_errno){
        echo "Erro";
    } else{
        echo "Correto.";
    }*/
?>