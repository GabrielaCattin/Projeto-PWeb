<?php
	session_start();
	
?>
<!doctype html>
<html>
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
    <link rel="stylesheet" href="../Vitrine/vitrine.css" />
    <link rel="stylesheet" href="../header.css" />
    <link rel="stylesheet" href="../footer.css" />
  </head>
<body>
	<div class="container">
    <section class="produtos">
      <h1 class="text-center">Resultado da busca</h1>
      <div class="row justify-content-center">
        <?php listar(); ?>
      </div>
    </section>
	</div>	
</body>
</html>
<?php
function listar(){
	$conexao=	new mysqli("localhost", "root", "", "projeto");
	if(isset($_POST["btnBusca"])){
		$busca = $_POST["busca"];
		$sql = "select * from produto where nome like '%$busca%' or descricao like '%$busca%'";	
	} else {
		$sql = "select * from produto order by nome";
	}	

	$resultado = mysqli_query($conexao, $sql);
	while($reg = mysqli_fetch_array($resultado)){
		$codigo = $reg["codigo"];
		$nome = $reg["nome"];
		$descricao = $reg["descricao"];
		
		echo "
		<div class=col-xl-3 col-md-6 col-sm-12>
        <div class=card>        
          <img class=card-img-top src='../img/$codigo.jpg'/>
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


