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
    <!-- <link rel="stylesheet" href="vitrine.css" /> -->
    <link rel="stylesheet" href="produtos.css" />
    <link rel="stylesheet" href="../header.css" />
    <link rel="stylesheet" href="../footer.css" />
  </head>
  <body>
    <?php include("../header.php");?>

    <main>
      <div class="container text-center">        
        <?php listar(); ?>
      </div>  
     
      <?php include("../footer.php");?>
      
    </main>    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php
function listar(){
	$conexao=	new mysqli("localhost", "root", "", "projeto");
	if(isset($_GET["codigo"])){
		$codigo = $_GET["codigo"];
		$sql = "select * from produto where codigo=$codigo";	
	} else {
		$sql = "select * from produto";
	}		
	$resultado = mysqli_query($conexao, $sql);
	while($reg = mysqli_fetch_array($resultado)){
		$codigo = $reg["codigo"];
		$nome = $reg["nome"];
		$descricao = $reg["descricao"];   
    $preco = $reg["preco"];
    
    echo "
      
    <section class=separator id=$nome>
        <h2 class=pt-3 pb-3>$nome</h2>
        <img class=img-thumbnail src=../imagens/$codigo.jpg id=imgcompra/>
        <p class=produto-descricao id=produto-descricao>$descricao</p>
        <div class='shadow-lg accordion accordion-flush col-6' id=accordionPanelsStayOpenExample7>             
          <div class=accordion-item>              
              <div id=preco class=accordion-collapse collapse data-bs-parent=#accordionFlushExample7>
                <div class=accordion-body> 
                  <p class=produto-preco>R$$preco</p>
                  <a href='../Cesta/adicionar.php?codigo=$codigo' class='btn'>Adicionar</a>
                    
                </div>
              </div>                    
          </div>              
          
      </section> 
    ";
    }	
	
	mysqli_close($conexao);
}
?>

    
