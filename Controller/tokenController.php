<?php
$email = $_POST['email'];

$url = 'http://localhost:3000/enviar-token';
$data = array('email' => $email);

$options = array(
    'http' => array(
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) {
    die('Erro ao enviar o token.');
}

echo "Token enviado para o seu e-mail.";
?>
