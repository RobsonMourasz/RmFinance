<?php 
    if (isset($_COOKIE['relogar'])){
        if ($_COOKIE['relogar'] == 's') {
            die('
                <script>
                    window.location.href = "public/index.php";
                </script>');
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app/css/perfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="logo">
                <img src="app/assets/logo.png" alt="">
            </div>
            <h1>Login</h1>
            <form action="app/login.php" method="post" id="login-form">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <span class="alerta" id="alerta-email"></span>
                </div>
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                    <span class="alerta" id="alerta-senha"></span>
                </div>
                <input type="submit" value="Entrar">
            </form>
            <p>Não tem uma conta? <a href="cadastro.html">Cadastre-se</a></p>
        </div>
    </div>
    <script src="app/js/login.acoes.js"></script>
</body>
</html>