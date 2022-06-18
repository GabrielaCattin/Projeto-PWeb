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
  <header>
    <nav class="flex-wrap navbar navbar-expand-sm navbar-dark">
      <div class="container-fluid">
      <div class="caixa d-flex justify-content-between align-items-center">
        <a href="../Vitrine/vitrinepweb.html"><img class="mb-1 rounded-circle" src="../img/Amor de Mãe.png" /></a>
                
          <form class="pesquisa form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Busca"
              aria-label="Search"
            />
            <button id="buscar" class="btn my-2 my-sm-0" type="submit">
              Buscar
            </button>
          </form>
          <div class="cadastro">
            <a id="cadastro" href="../Login/Cadastro.html">
              <img src="../img/avatar.png" alt="Cadastro" />
              Cadastro
            </a>
          </div>
        </div>

        <button class="mt-2 mb-2 navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></a></span>
        </button>
        <div class="menu justify-content-evenly collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../Vitrine/vitrinepweb.html">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Serviços</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../Produto/produtodetalhe.html#luzes">Cabelos</a></li>
                <li><a class="dropdown-item" href="../Produto/produtodetalhe.html#mao-pe">Manicure e Pedicure</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Contato/contato.html">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Cesta/cesta.html">Cesta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Login/login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container d-flex">
    <div class="col-12">
      <h2 class="text-center">Por gentileza, identifique-se</h2>
      <br>
      <form action="/action_page.php">
        <center>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input style="width: 300px;" type="email" class="form-control" id="email" placeholder="Entre com seu email"
            name="email">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Senha:</label>
          <input style="width: 300px;" type="password" class="form-control" id="pwd" placeholder="Entre com sua senha"
            name="pswd">
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Lembre de mim.
          </label>
        </div>

        <div> 
          <div>
            <button type="button" class="input-group-text" onclick="botao1()"
              style="vertical-align: middle;float:center; padding: 11px 12px; border:1px  solid;">Enviar
            </button>
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
<footer class="footer text-center">
  <a class="text-uppercase" href="../Contato/contato.html">Entre em contato</a>
  <p class="text-uppercase">COPYRIGHT © 2022 AMOR DE MÃE</p>
</footer>

</html>