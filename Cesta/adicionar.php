<?php
if(isset($_GET["codigo"])){
    $codigo = $_GET["codigo"];
    session_start();
    $sessionId = session_id();
    $qtd = 1;
    $conexao = new mysqli("localhost", "root", "", "projeto");
    $sql = "insert into cesta(codigoProduto, descricao, valor, quantidade, sessionId) values('$codigoProduto','$descricao','$valor','$quantidade','$sessionId')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("location:cesta.php");
} else {
    echo "<h4>Código invalido!</h4>";
}
?>