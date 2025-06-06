<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['sessao']) || $_SESSION['sessao'] == 0 || $_SESSION['sessao'] == '' || empty($_SESSION['usuario'])) {
        session_destroy();
        die("<script>alert('Acesso negado!');window.location.href='index.php';</script>"); // Redireciona para a página de login
        exit;
    } else if ($_SESSION['sessao'] == 1) {
        // A sessão está ativa, continue com o processamento
    }