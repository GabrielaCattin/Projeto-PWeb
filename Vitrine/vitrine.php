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
   
    <main>
      <section class="banner">
        <img src="../imagens/banner-1.jpg" alt="" />
        <h2 class="display-1 text-uppercase"><i>Você na sua melhor versão</i></h2>
      </section>
      <div class="container">
        <section class="produtos">
          <h1 class="text-center">Conheça os nossos serviços</h1>
          <div class="row">
            <?php listarVitrine(); ?>
          </div>
        </section>
      </div>

      <section class="antes-depois container">
        <h2 class="text-center">Antes e depois</h2>
       <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item mb-3 active">
              <img src="../imagens/antesedepois1.jpg" alt="Los Angeles" class="d-block" style="height:90vh; width: 100%;">
            </div>
            <div class="carousel-item mb-3">
              <img src="../imagens/antesedepois2.jpg" alt="Chicago" class="d-block" style="height:90vh; width: 100%;">
            </div>
            <div class="carousel-item mb-3">
              <img src="../imagens/antesedepois3.jpg" alt="New York" class="d-block" style="height:90vh; width: 100%;">
            </div>
          </div>
          
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

      </section>     

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
function listarVitrine(){
	$conexao=	new mysqli("localhost", "root", "", "projeto");
  $sql = "select * from produto group by nome";
			
	$resultado = mysqli_query($conexao, $sql); 
	
	while($reg = mysqli_fetch_array($resultado)){
		$codigo = $reg["codigo"];
		$nome = $reg["nome"];
		$descricao	= $reg["descricao"];
	
		echo " 
      <div class=col-xl-3 col-md-6 col-sm-12>
        <div class=card>        
          <img class=card-img-top src='../imagens/$codigo.jpg'/>
          <div class=card-body>
            <h5 class=card-title><tr>$nome</h5>
            <p class=card-text>$descricao</p>        
            <a href='../Produto/produtodetalhe.php?codigo=$codigo' class=btn>Selecionar</a>
          </div>   
        </div>
      </div>          
    ";   
	} 
	mysqli_close($conexao);
}
?>