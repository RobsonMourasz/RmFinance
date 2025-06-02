<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $requisicao = filter_input(INPUT_POST, 'request', FILTER_DEFAULT);

    if ($requisicao == 'login'){
        $usuario = strtolower(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)));
        $senha = trim($_POST['senha']);

        if (empty($usuario) || $usuario !== 'robsonic10@gmail.com'){
            die(json_encode([
                'status' => 'error',
                'message' => 'email incorreto'
            ]));
        }

        if (empty($senha) || $senha !== '1234'){
            die(json_encode([
                'status' => 'error',
                'message' => 'senha incorreta'
            ]));
        }
        
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['sessao'] = 1; 
        echo json_encode([
            'status' => 'success',
            'message' => 'autorizado'
        ]);
    }
   
} else {
    // Handle GET request
    die(json_encode([
        'status' => 'error',
        'message' => 'Esta é uma solicitação POST não há dados para processar.'
    ]));
}