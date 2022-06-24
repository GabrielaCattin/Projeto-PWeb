<?php
session_start();
if(isset($_GET["codigo"])){
	$codigo = $_GET["codigo"];

	$sessionId = session_id();
	
	$conexao = new mysqli("localhost","root","","projeto");
	
	$sql = "select codigo from cesta where codigoProduto='$codigo' and sessionId='$sessionId'";
	$resultado = mysqli_query($conexao, $sql);
	if($reg = mysqli_fetch_array($resultado)){
		$codigoProduto = $reg["codigo"];
		// $nomeProduto = $reg["nome"];
		$sql = "update cesta set quantidade = quantidade + 1 where codigo=$codigoProduto";
	} else {		
		$sql = "insert into cesta(codigoProduto, sessionId, quantidade) values('$codigo', '$sessionId', '1')";		
	}
	mysqli_query($conexao, $sql);
	mysqli_close($conexao);
	header("location:cesta.php");
} else {
	echo "<h4>Codigo invalido</h4>!!";	
}
?>