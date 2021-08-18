<?php
session_start();
include_once("conexao.php");

$produto = filter_input(INPUT_POST,'produto', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST,'valor', FILTER_SANITIZE_STRING);
$data_cadastro = filter_input(INPUT_POST,'data_cadastro', FILTER_SANITIZE_STRING);

$result = "INSERT INTO produtos(produto, valor, data_cadastro) VALUES ('$produto', '$valor', '$data_cadastro')";
$resultado = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color: #034803; font-size: 20px; font-family: Verdana'>Produto cadastrado com sucesso !</p>";
    header("Location: cadastro.php");
}else{
    $_SESSION['msg'] = "<p style='color: red; font-size: 20px; font-family: Verdana'>Produto não cadastrado !</p>".$produto;
    header("Location: index.php");
}



