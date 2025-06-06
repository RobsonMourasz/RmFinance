<?php 
if (!isset($_SESSION)) {
    session_start();
}
if($_COOKIE['relogar']){
    setcookie('relogar', '', time() - 3600, '/'); // Remove o cookie de logado
}
session_destroy(); // Destroi a sessão
die("<script>window.location.href='../index.php';</script>"); // Redireciona para a página de login