<?php
session_start();

define('host','127.0.0.1');
define('usuario', 'admin');
define('senha', 'admin');
define('db', 'login');

$conexao = mysqli_connect(host, usuario, senha, db) or die('Não deu boa');

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);


$result_usuario = "insert into usuarios (login, senha, email, create_date) values ('$login', md5('$senha'), '$email', now())";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if (mysqli_insert_id($conexao)) {
    $_SESSION ['msg'] = "Usuario cadastrado com sucesso";
    header("Location: index.html");
} else {
    header("Location: index.html");
}