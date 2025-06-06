<?php 
    require '../src/constantes.php';
    if (!isset($_SESSION)){session_start();}
    if ( !isset($_SESSION['sessao']) || $_SESSION['sessao'] == 0 || $_SESSION['sessao'] == '' || empty($_SESSION['usuario'])) {
        die("<script>alert('Acesso negado!');window.location.href='../index.php';</script>"); // Redireciona para a página de login
        exit;
    }else if($_SESSION['sessao'] == 1){
        
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE.'app/css/style.css' ?>">
    <title>Bem vindo</title>
</head>

<body>

    <header>
        <div class="toggle">x</div>
        <div class="logo">
            RM SISTEMAS | Bem vindo <?php echo $_SESSION['usuario'] . ' ---    '. URL_BASE;?>
        </div> <!-- Logo do site -->
    </header>

    <main>

        <nav class="">
            <ul>

                <li><a href="dashboard"> <i class="bi bi-graph-up-arrow"></i> Home</a></li>
                <li><a href="despesas"> <i class="bi bi-building-fill-down"></i> Despesas</a></li>
                <li><a href="receitas"> <i class="bi bi-building-add"></i> Receitas</a></li>
                <li><a href="relatorios"> <i class="bi bi-file-earmark-bar-graph"></i> Relatórios</a></li>
                <li><a href="logoff"> <i class="bi bi-indent"></i> Logoff</a></li>

            </ul>
        </nav>

        <section> <!-- conteiner da pagina -->
            <?php
            if (isset($_GET['url'])) {
                if ($_GET['url'] == 'logoff'){
                    die(header("Location: ../src/logoff.php"));
                }
                if (file_exists('page/' . $_GET['url'] . '.php')) {
                    include 'page/' . $_GET['url'] . '.php';
                } else {
                    include 'page/404.php';
                }
            } else {
                include 'page/dashboard.php';
            }
            ?>
        </section> <!-- FIM do conteiner da pagina -->
    </main>

    <footer>
        Sistema criado por Robson Moura &copy; 2023
    </footer>

    <script>
        const toggle = document.querySelector('.toggle');
        const nav = document.querySelector('nav');

        toggle.addEventListener('click', function() {
            nav.classList.toggle('nav-toggle');
        });

        // Fecha o menu ao clicar fora dele


        if (window.innerWidth <= 768) {
            nav.classList.add('nav-toggle');

            document.addEventListener('click', function(event) {
                if (!nav.contains(event.target) && !toggle.contains(event.target)) {
                    nav.classList.add('nav-toggle');
                }
            });
        }

        window.addEventListener('resize', function() {
            if (window.innerWidth <= 768) {
                nav.classList.add('nav-toggle');
            } else {
                nav.classList.remove('nav-toggle');
            }
        });

        function limparParametrosURL() {
            window.history.replaceState({}, "", window.location.pathname);
        }

        // Chamando a função após carregar os dados da página
        document.addEventListener("DOMContentLoaded", limparParametrosURL);
    </script>
    <script src="<?php echo URL_BASE.'app/js/acoes.js'?>"></script>
</body>

</html>
<?php
    } else{
        die("<script>alert('Acesso negado!');window.location.href='../index.php';</script>"); // Redireciona para a página de login
        exit;
    }
?>