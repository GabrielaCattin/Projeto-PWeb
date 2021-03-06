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
          <h1><img class="rounded-circle" src="../img/Amor de Mãe.png" /></h1>         
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
          
      <button class="mt-2 mb-2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
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
  <main>
    <div class="container">
        <h1>Cadastro realizado com sucesso!</h1>
        <hr>
        <p>
            Caro cliente,
        </p>
        <p>
            Informamos que seu cadastro foi realizado com sucesso! </p>
            <p>
            Sinta-se a vontade para conhecer nossos serviços, e marcar um horário para se conhecer em sua melhor versão!
        </p>
        <p>
            Agradecemos pela confiança em nossos serviços!
        </p>
        <hr>
        <p>
            Cordialmente,<br>
            Salão de beleza Amor de Mãe 
        </p>
    </div>
</main> 
<footer class="footer text-center">
  <a class="text-uppercase" href="../Contato/contato.html">Entre em contato</a>
  <p class="text-uppercase">COPYRIGHT © 2022 AMOR DE MÃE</p>
</footer>
</html>