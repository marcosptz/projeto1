function GravaAluno()
{
    // conecta ao servidor
	var xmlhttp = new XMLHttpRequest();
 
	/* colocar na url os valores que quer passar para o servidor.
	   seu arquivo PHP deverá capturar os dados usando $_GET[]; */
    var url = "http://localhost:8080/chamadaweb/core/aluno-grava.php?nome=" + document.getElementById('nome_aluno').value; 
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	//alert("Gravado com sucesso no servidor");
}