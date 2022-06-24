<?php
  session_start();
if(isset($_POST["ACAO"]) && $_POST["ACAO"] == 1){
$usuario = $_POST['email'];
$senha = md5($_POST['senha']);
$conexao = new mysqli("localhost", "root", "", "projeto");
$retorno_usuario = "SELECT * FROM usuario WHERE email = '$usuario' and senha = '$senha' LIMIT 1";
$resultado_usuario = mysqli_query($conexao, $retorno_usuario);
$rowcount=mysqli_num_rows($resultado_usuario);
$resultado = mysqli_fetch_array($resultado_usuario);
if($rowcount > 0){
  if (isset($resultado_usuario)) {
      
      $_SESSION['email'] = $resultado['email'];
      $_SESSION['senha'] = $resultado['senha'];
      print_r($_SESSION);
      header("location: ../Vitrine/vitrine.php");
  } else {
     echo " <h4>E-mail e/ou senha inválido(s)!</h4>";
  } 

} else {
  echo "<h4>Usuario não encontrado</h4>";
}


mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Amor de Mãe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Oswald:wght@300;400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../header.css" />
  <link rel="stylesheet" href="../footer.css" />
</head>

<body>
<?php include("../header.php"); ?>
 <div class="container d-flex">
    <div class="col-12">
      <h2 class="text-center">Por gentileza, identifique-se</h2>
      <br>
      <form action="login.php" method="POST">
        <center>
        <input  type="hidden"  id="ACAO" value="1"
            name="ACAO">
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input  type="email"  id="email" placeholder="Entre com seu email"
            name="email">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Senha:</label>
          <input  type="password"  id="pwd" placeholder="Entre com sua senha"
            name="senha">
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Lembre de mim.
          </label>
        </div>

        <div> 
          <div>
          <input type="submit" value="Entrar">
          </div>

          <div class="mt-3">
            <button type="button" class="input-group-text" data-bs-toggle="collapse" data-bs-target="#demo"
              style="vertical-align: middle;float:center; padding: 11px 12px; border: 1px solid;">
              Esqueci
              minha
              senha</button>
            <div id="demo" class="collapse">
              <br />
              <div class="input-group">
                <button type="button" class="input-group-text" style="border-color: #dbb4ad;
                            background-color: #dbb4ad;
                             color: #fff">Enviar</button>
                <input type="text" class="form-control" placeholder="Insira seu e-mail.">
              </center>
              </div>
            </div>
      </form>
      <?php if(isset($_POST["bt1"])) login(); ?>
    </div>
    <br> 
    <div class="col-12">
      <hr>
      <h2 class="text-center">Ainda não sou cadastrado</h2>
      <br/> <br/>
      <center><button type="button" class="btn btn-primary" onclick="botao2()">Realizar cadastro</button></center>
    </div>
  </div>
  </div>
  </div>
  <br></br> <br /> <br />

  <?php include("../footer.php") ?>
</body>
<script type="text/javascript">
  function botao1() {
    location.href = "../Vitrine/vitrinepweb.html";
  }
</script>
<script type="text/javascript">
  function botao2() {
    location.href = "../Login/Cadastro.html";
  }
</script>

</html>