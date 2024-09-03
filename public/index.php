
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles-login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Entrar</title>
</head>
<body>
    <form action="login-validation.php" method="POST">
        <div class="main-login">
            <div class="left-login">
                <h1>Boas-vindas, <br>Administrador</h1>
                <img src="./assets/img-login/animation.svg" class="left-login-image" alt="animation">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>
                    <div class="textField">
                        <label for="user">Usuário</label>
                        <input type="text" name="user" required>
                    </div>
                    <div class="textField">
                        <label for="pword">Senha</label>
                        <input type="password" name="pword" required>
                    </div>
                    <input type="submit" class="btn-login" name="submit" id="submit" value="Acessar">
                </div>
            </div>
        </div>
    </form>
</body>
</html>