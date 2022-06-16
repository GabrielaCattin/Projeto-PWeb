<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amor de Mãe</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Oswald:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="vitrine.css" />
    <link rel="stylesheet" href="../header.css" />
    <link rel="stylesheet" href="../footer.css" />
  </head>
  <body>
    <?php include("../header.php");?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><span>Carrinho</span></h2>
        </div>
      </div>
    </div>
    <?php listarCesta();?>
  </body>
  <?php include("../footer.php");?>
</html>

<?php
function listarcesta(){
    session_start();
    $sessionId = session_id();
    $conexao = new mysqli("localhost", "root", "37873651", "projeto");
    $sql = "select p.codigo, p.descricao, c.quantidade, c.valor, c.valor*c.quantidade as total  from produto p inner join cesta c on p.codigo=c.codigoProduto where c.sessionId = '$sessionId' order by nome";

    $resultado = mysqli_query($conexao, $sql);
    while($reg = mysqli_fetch_array($resultado)) {
        $nome = $reg["nome"];
        $descricao = $reg["descricao"];
        $codigo = $reg["codigo"];
        $valor = $reg["valor"];
        $quantidade = $reg["quantidade"];
        $total = $reg["total"];

        echo "
        <div class=col-xl-3 col-md-6 col-sm-12>
        <div class=card>        
          <img class=card-img-top src='../imagens/$codigo.jpg'/>
          <div class=card-body>
            <h5 class=card-title><tr>$nome</h5>
            <p class=card-text>$descricao</p>
            <p class=card-text>$valor</p>
            <p class=card-text>$total</p>    
            <input class=btn type=submit value=Finalizar Compra onclick=window.location.href='../Cesta/finalizarcompra.html'/>    
          </div>   
        </div>
      </div>          
    ";
    }
    mysqli_close($conexao);

}
?>
