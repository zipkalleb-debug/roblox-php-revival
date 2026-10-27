<?php
header('Content-Type: application/json');

// Lê os dados enviados pelo APK do Roblox
$input = json_decode(file_get_contents('php://input'), true);

// Pega o nome de utilizador introduzido ou usa "Nikiliss" como padrão
$username = trim($input['username'] ?? $_POST['username'] ?? 'Nikiliss');
if (empty($username)) {
    $username = "Nikiliss";
}

$user_id = 1;

// Resposta de sucesso absoluta: aceita qualquer login e deixa entrar
echo json_encode([
    "status" => "OK",
    "userId" => $user_id,
    "username" => $username,
    "robuxBalance" => 99999,
    "ticket" => "revival_session_token_" . $user_id,
    "user" => [
        "id" => $user_id,
        "name" => $username,
        "displayName" => $username
    ]
]);
?>
