<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['pword'])){
        include_once('config-db.php');
        $user = $_POST['user'];
        $pword = $_POST['pword'];
        /*
        print_r($user);
        print_r("<br>");
        print_r($pword);
        */
        $sql = "SELECT * FROM adm_users WHERE user = '$user' AND pword = '$pword'";
        $result = $connection->query($sql);
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['user']);
            unset($_SESSION['pword']);
            header('Location: public-login.php');
        } elseif (!isset($_SESSION)) {
            session_start();    
        } else { 
            $_SESSION['user'] = $user;
            $_SESSION['pword'] = $pword;
            header('Location: panel.php');
        }
    } else{
        header('Location: public-login.php');
    }
?>