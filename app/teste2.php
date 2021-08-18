<?php
	include "conexao.php";
	$email = $_POST['produto'];
	$senha = $_POST['valor'];
	$senha = $_POST['data_cadastro'];
	$sql = "INSERT INTO usuario (PRODUTO, VALOR, DATA_CADASTRO) VALUES ('$produto', '$valor', '$data_cadastro')";
	mysql_query($sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>