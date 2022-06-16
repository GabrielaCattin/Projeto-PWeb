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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
   
  </body>
</html>
<?php
function listar(){
	$conexao=	new mysqli("localhost", "root", "37873651", "projeto");
  $sql = "select * from produto";
			
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

      if($codigo == 1 ) {
        echo "
        <h2 id=cabelo>Escolha o serviço de acordo com o tamanho do seu cabelo.</h2>
        ";
      }
      echo "
      
      <section class=separator id=$nome>
      <h2 class=pt-3 pb-3>$nome</h2>
      <img class=img-thumbnail src=../imagens/$codigo.jpg id=imgcompra />
      <p class=produto-descricao>$descricao</p> 

      <div class='shadow-lg accordion accordion-flush col-6 id=accordionFlushExample'>
        <div class=accordion-item>
          <h2 class=accordion-header id=$nome-$tamanhop>
            <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#flush-$nome-$tamanhop aria-expanded=false aria-controls=flush-$nome-$tamanhop>
              $tamanhop
            </button>
          </h2>
          <div id=flush-$nome-$tamanhop class=accordion-collapse collapse aria-labelledby=$nome-$tamanhop data-bs-parent=#accordionFlushExample>
            <div class=accordion-body> 
                <p class=produto-preco id=produto-preco>$precop</p>
                <input class=btn type=submit value=Adicionar ao carrinho onclick=botao()/>
            </div>
          </div>
        </div>

        <div class=accordion-item>
          <h2 class=accordion-header id=$nome-$tamanhom>
            <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#flush-$nome-$tamanhom aria-expanded=false aria-controls=#flush-$nome-$tamanhom>
            $tamanhom
            </button>
          </h2>
          <div id=flush-$nome-$tamanhom class=accordion-collapse collapse aria-labelledby=$nome-$tamanhom data-bs-parent=#accordionFlushExample>
            <div class=accordion-body>
                <p class=produto-preco id=produto-preco>$precom</p>
                <input class=btn type=submit value=Adicionar ao carrinho onclick=botao()/>
            </div>
          </div>
        </div>
        <div class=accordion-item>
          <h2 class=accordion-header id=$nome-$tamanhog>
            <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#flush-$nome-$tamanhog aria-expanded=false aria-controls=#flush-$nome-$tamanhog>
            $tamanhog
            </button>
          </h2>
          <div id=flush-$nome-$tamanhog class=accordion-collapse collapse aria-labelledby=$nome-$tamanhog data-bs-parent=#accordionFlushExample>
            <div class=accordion-body>
                <p class=produto-preco id=produto-preco>R$ $precog</p>
                <input class=btn type=submit value=Adicionar ao carrinho onclick=botao()/>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
      ";	
    } else {
      if($codigo == 7 ) {
        echo "
        <h2 id=mao-pe>Cuide de suas mãos e pés</h2>
        ";
      }
      echo "
      
      <section class=separator id=$codigo>
          <h2 class=pt-3 pb-3>$nome</h2>
          <img class=img-thumbnail src=../imagens/$codigo.jpg id=imgcompra/>
          <p class=produto-descricao id=produto-descricao>$descricao</p>
          <div class='shadow-lg accordion accordion-flush col-6' id=accordionPanelsStayOpenExample7>             
            <div class=accordion-item>
                <h2 class=accordion-header id=$nome-$tamanhop>
                  <button class=accordion-button collapsed type=button data-bs-toggle=collapse data-bs-target=#flush-$nome-$tamanhop aria-expanded=true aria-controls=flush-$nome-$tamanhop>
                    $tamanhop
                  </button>
                </h2>
                <div id=flush-$nome-$tamanhop class=accordion-collapse collapse aria-labelledby=$nome-$tamanhop data-bs-parent=#accordionFlushExample7>
                  <div class=accordion-body> 
                    <p class=produto-preco id=produto-preco>R$$precop</p>
                      <input class=btn type=submit value=Adicionar ao carrinho onclick=botao()/>
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

    
