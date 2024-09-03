<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/assets-panel/images/favicon.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./assets/assets-panel/styles.css">
    <title>Serviços</title>
    <style>
        .section {
            display: none;
        }
    </style>
    <script>
        function showSection(sectionId) {
            var sections = document.querySelectorAll('.section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
</head>
<body>
    <header>
        <div class="info-header">
            <div class="name">
                <h3>EninCar</h3>
            </div>
            <div class="icons-header"></div>
        </div>
        <div style="align-items: center;" class="info-header">
            <a href="./logout.php"><i class="fa-solid fa-right-from-bracket icone"></i></a>
            <img src="./assets/assets-panel/images/Design sem nome (1).png">
        </div>
    </header>
    <section class="main">
        <div class="sidebar">
            <h3>Navegar</h3>
            <a class="" href="panel.php"><i class="fa-solid fa-house"></i>  Início</a>
            <a class="" href="products.php"><i class="fa-solid fa-box"></i>  Peças</a>
            <a class="sidebar-active" href="./services-panel.php"><i class="fa-solid fa-wrench"></i>  Serviços</a>
            <br>
            <div class="separator"></div>
        </div>
        <div class="content">
            <div class="section-title">
                <h2>Tabela de Serviços realizados atual. Dia: <?php date_default_timezone_set('America/Sao_Paulo'); echo date("d/m/Y"); echo ", "; echo date("H:i");?>. Horário de Brasília.</h2>
                <br>
                <div class="separator"></div>
                <br>    
                <p><i class="fa-solid fa-wrench"></i> / Serviços</p>
            </div>
            <div class="box-info">
                <div style="background: linear-gradient(to right, #b0b0b0, #909090, #707070, #505050);" class="box-info-single">
                    <div class="info-text">
                        <h3>Serviços</h3>
                        <p>Registrar novos serviços</p><br>
                        <button class="adc" onclick="showSection('addServices')">Adicionar</button>
                    </div>
                    <i class="fa-solid fa-barcode"></i>
                </div>
                <div style="background: linear-gradient(to right, #b0b0b0, #909090, #707070, #505050);" class="box-info-single">
                    <div class="info-text">
                        <h3>Serviços</h3>
                        <p>Mostrar Serviços Registrados</p><br>
                        <button class="show" onclick="showSection('showServices')">Ver</button>
                    </div>
                    <i class="fa-solid fa-barcode"></i>
                </div>
            </div>
            <div id="addServices" class="section">
                <?php include('addservices.php'); ?>
            </div>
            <div id="showServices" class="section">
                <?php include('showServices.php'); ?>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
