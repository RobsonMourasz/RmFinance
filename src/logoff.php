<?php 
if (!isset($_SESSION)) {
    session_start();
}
if($_COOKIE['relogar']){
    setcookie('relogar', '', time() - 3600, '/'); // Remove o cookie de relogar
    setcookie('usuario', '', time() - 3600, '/'); // Remove o cookie de usuario
    setcookie('sessao', '', time() - 3600, '/'); // Remove o cookie de sessao
}
session_destroy(); // Destroi a sessão
die("<script>window.location.href='../index.php';</script>"); // Redireciona para a página de login