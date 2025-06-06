<?php 
header('Content-Type: application/json; charset=UTF-8');
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

        if (!headers_sent()) {
            setcookie('relogar', 's', time() + 86400, "/");
        } else {
            die(json_encode([
                'status' => 'error',
                'message' => 'Não foi possível definir o cookie, cabeçalhos já enviados.'
            ]));
        }
        echo json_encode([
            'status' => 'success',
            'message' => 'autorizado'
        ]);
    } else {
        die(json_encode([
            'status' => 'error',
            'message' => 'solicitação não encontrada, favor verificar novamente a requisição.'
        ]));
    }
   
} else {
    // Handle GET request
    die(json_encode([
        'status' => 'error',
        'message' => 'solicitação não encontrada, favor verificar novamente a requisição.'
    ]));
}