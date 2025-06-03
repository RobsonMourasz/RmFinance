<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../app/css/style.css">
    <title>Bem vindo</title>
</head>

<body>

    <header>
        <div class="toggle">x</div>
        <div class="logo">
            RM SISTEMAS
        </div> <!-- Logo do site -->
    </header>

    <main>

        <nav class="">
            <ul>

                <li><a href="#"> <i class="bi bi-graph-up-arrow"></i> Home</a></li>
                <li><a href="#"> <i class="bi bi-building-fill-down"></i> Despesas</a></li>
                <li><a href="#"> <i class="bi bi-building-add"></i> Receitas</a></li>
                <li><a href="#"> <i class="bi bi-file-earmark-bar-graph"></i> Relatórios</a></li>
                <li><a href="#"> <i class="bi bi-indent"></i> Logoff</a></li>

            </ul>
        </nav>
        <section>
            
        </section>
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
    </script>

</body>

</html>