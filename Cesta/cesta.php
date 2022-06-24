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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include("../header.php");?>  
   
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><span>Carrinho</span></h2>
        </div>
      </div>
      <div class="item"> 
        <?php listarCesta();?> 
      </div>
      
     <form class="botao" method="post" action="">
      <a class="btn" id="btn2" href="../Vitrine/vitrine.php">Finalizar compra</a>
      <a class="btn" id="btn2" href="../Vitrine/vitrine.php">Continuar comprando</a>       
      <button class="btn" name="limpar">Limpar carrinho</button>
    </form>
    <?php if(isset($_POST["limpar"])) limpar(); ?>
    </div>
    
    <?php include("../footer.php");?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>   
    
</html>

<?php
function listarcesta(){
    session_start();
    $sessionId = session_id();
    $conexao = new mysqli("localhost", "root", "", "projeto");
    $sql = "select p.codigo, p.descricao, p.nome, c.quantidade, p.preco, p.preco*c.quantidade as total from produto p inner join cesta c on p.codigo=c.codigoProduto where c.sessionId = '$sessionId' order by nome";
    $totalPedido = 0;
    $resultado = mysqli_query($conexao, $sql);
    while($reg = mysqli_fetch_array($resultado)) {
      if(!isset($_POST["limpar"])) {
        $nome = $reg["nome"];
        $descricao = $reg["descricao"];
        $codigo = $reg["codigo"];
        $preco = $reg["preco"];        
        $quantidade = $reg["quantidade"];
        $total	=	$reg["total"];
        echo "
       
        <div class=container mt-3>
          <div class='card'>        
            <img class=card-img-top src='../imagens/$codigo.jpg'/>
            <div class=card-body>
            <div class=card-header><B>$nome</B></div>
              
            <div class=card-footer><B>$preco</B></div>
            
            
            <div class=card-footer><B>Quantidade: $quantidade</B></div>
            
            
          </div>   
        </div>
      </div>          
    ";
   
    $totalPedido = $totalPedido + $total;
 
    
      }      
    }  
    
    mysqli_close($conexao);
    echo "<div class=total><b>Total: R$ $totalPedido</b></div>";
}
function limpar(){
  $sessionId = session_id();  
  $conexao=	new mysqli("localhost", "root", "", "projeto");
  $sql	=	"delete from cesta where sessionId = '$sessionId'";	
  mysqli_query($conexao, $sql);
  mysqli_close($conexao);
  echo "<h4>Seu carrinho está vazio!</h4>";
}
?>
