<?php
	//Conexão à base de dados
    // mysql_connect("localhost", "root", "") or die(mysql_error());
    // mysql_select_db("phpajax") or die(mysql_error());
    session_start();
    include_once("conexao.php");
  
    //recebe os parâmetros
  
     $campo1 = $_REQUEST['campo1'];
     $campo2 = $_REQUEST['campo2'];
  
     try
     {
         //insere na BD
         $sql = "INSERT INTO dados (campo1bd, campo2bd) VALUES('".trim($campo1)."','".trim($campo2)."')";
         $result = mysqli_query($conn, $sql);
  
         //retorna 1 para no sucesso do ajax saber que foi com inserido sucesso
         echo "1";
     } 
     catch (Exception $ex)
     {
         //retorna 0 para no sucesso do ajax saber que foi um erro
         echo "0";
     }
?>