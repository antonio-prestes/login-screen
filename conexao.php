<?php
define('host','127.0.0.1');
define('usuario', 'admin');
define('senha', 'admin');
define('db', 'login');

$conexao = mysqli_connect(host, usuario, senha, db) or die('Não deu boa');
