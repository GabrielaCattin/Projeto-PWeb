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
    $tamanhop = $reg["tamanhop"];
    $tamanhom = $reg["tamanhom"];
    $tamanhog = $reg["tamanhog"];
    $precop = $reg["precop"];
    $precom = $reg["precom"];
    $precog = $reg["precog"];

    if(!empty($tamanhom)) {
      echo "
      
      <section class=separator id=luzes>
      <h2 class=pt-3 pb-3>$nome</h2>
      <img class=img-thumbnail src=../imagens/$codigo.jpg id=imgcompra />
      <p class=produto-descricao>$descricao</p> 
      <div class='shadow-lg accordion accordion-flush col-6 id=accordionFlushExample'>
        <div class=accordion-item>
          <h2 class=accordion-header id=luzes-1>
            <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#luzes-p aria-expanded=false aria-controls=luzes-p>
              $tamanhop
            </button>
          </h2>
          <div id=luzes-p class=accordion-collapse collapse aria-labelledby=luzes-1 data-bs-parent=#accordionFlushExample>
            <div class=accordion-body> 
                <p class=produto-preco id=produto-preco>$precop</p>
                <a href='../Cesta/adicionar.php?codigo=$codigo' class='btn'>Adicionar</a>         
                
            </div>
          </div>
        </div>
        <div class=accordion-item>
          <h2 class=accordion-header id=luzes-2>
            <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#luzes-m aria-expanded=false aria-controls=luzes-m>
            $tamanhom
            </button>
          </h2>
          <div id=luzes-m class=accordion-collapse collapse aria-labelledby=luzes-2 data-bs-parent=#accordionFlushExample>
            <div class=accordion-body>
                <p class=produto-preco id=produto-preco>$precom</p>
                <a href='../Cesta/adicionar.php?codigo=$codigo' class='btn'>Adicionar</a>              
               
            </div>
          </div>
        </div>
        <div class=accordion-item>
          <h2 class=accordion-header id=luzes-3>
            <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#luzes-g aria-expanded=false aria-controls=luzes-g>
            $tamanhog
            </button>
          </h2>
          <div id=luzes-g class=accordion-collapse collapse aria-labelledby=luzes-3 data-bs-parent=#accordionFlushExample>
            <div class=accordion-body>
                <p class=produto-preco id=produto-preco>R$ $precog</p>
                <a href='../Cesta/adicionar.php?codigo=$codigo' class='btn'>Adicionar</a>               
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
      ";	
    } else {
      echo "
      
      <section class=separator id=manicure>
          <h2 class=pt-3 pb-3>$nome</h2>
          <img class=img-thumbnail src=../imagens/$codigo.jpg id=imgcompra/>
          <p class=produto-descricao id=produto-descricao>$descricao</p>
          <div class='shadow-lg accordion accordion-flush col-6' id=accordionPanelsStayOpenExample7>             
            <div class=accordion-item>
                <h2 class=accordion-header id=manicure-1>
                  <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#manicure-p aria-expanded=true aria-controls=manicure-p>
                    $tamanhop
                  </button>
                </h2>
                <div id=manicure-p class=accordion-collapse collapse aria-labelledby=manicure-1 data-bs-parent=#accordionFlushExample7>
                  <div class=accordion-body> 
                    <p class=produto-preco id=produto-preco>R$$precop</p>
                    <a href='../Cesta/adicionar.php?codigo=$codigo' class='btn'>Adicionar</a>
                      
                  </div>
                </div>                    
            </div>              
            
        </section> 
      ";
    }
		
	
	}
	mysqli_close($conexao);
}
?>

    
