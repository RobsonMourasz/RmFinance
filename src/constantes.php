<?php 
 require_once __DIR__.'/seguranca.php'; // Verifica se o usuário está logado

    // Definindo constantes para o sistema
define('URL_BASE', getBaseUrl().'projetos/RmFinance/' ); // URL base do sistema

function getBaseUrl() {
    $protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    return "{$protocolo}://{$host}/";
}

