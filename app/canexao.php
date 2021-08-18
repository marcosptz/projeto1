<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
// $dbname = "softnew";
$dbname = "phpajax";

// Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");

// $db = mysqli_connect("softnew");