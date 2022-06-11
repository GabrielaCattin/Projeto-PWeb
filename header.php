  <header>
      <nav class="flex-wrap navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
        <div class="caixa d-flex justify-content-between align-items-center">
          <a href="../Vitrine/vitrine.php"><img class="mb-1 rounded-circle" src="../imagens/Amor de Mãe.png" /></a>
                  
            <form method="post" action="../Busca/listaProduto.php" class="pesquisa form-inline my-2 my-lg-0">
              <input
                id="busca" name="busca"
                class="form-control mr-sm-2"
                type="search"
                placeholder="Busca"
                aria-label="Search"
              />
              <button name="btnBusca" id="buscar" class="btn my-2 my-sm-0" type="submit">
                Buscar
              </button>
            </form>
            <div class="cadastro">
              <a id="cadastro" href="../Login/Cadastro.html">
                <img src="../imagens/avatar.png" alt="Cadastro" />
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
              <a class="nav-link" href="../Vitrine/vitrine.php">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Serviços</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../Produto/produto.php#cabelo">Cabelos</a></li>
                <li><a class="dropdown-item" href="../Produto/produto.php#mao-pe">Manicure e Pedicure</a></li>                  
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

