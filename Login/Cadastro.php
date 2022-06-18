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

<body>

  <div class="container">
    <h1 class="text-center">Venha se cadastrar!</h1>
    <br>
    <form id="form" method="POST" action="Cadastro.php?Enviar=1">
      <div class="row">

        <div class="col-sm-12 col-md-6">
          <fieldset class="row">
            <b>
              <legend> Dados Pessoais </legend>
            </b>
            <div class="mb-3">
              <label for="txtName" class="form-label">Nome</label>
              <input style="width: 400px" type="text" class="formControl" id="txtName" placeholder="Nome Completo" name="nome">
            </div>

            <div class="mb-3 col-md-6 col-xl-4">
              <label for="txtCPF" class="form-label">CPF</label>
              <span class="form-text">(Somente numeros)</span>
              <input type="text" class="formControl" id="txtCPF" name="cpf">
            </div>

            <div class="mb-3 col-md-6 col-xl-4">
              <label for="txtDateNascimento" class="form-label">Data de Nascimento</label>
              <input type="date" class="formControl" id="txtDateNascimento" name="dtNascimento">
            </div>
          </fieldset>
          <fieldset class="row">
            <legend>Contatos</legend>
            <div class="mb-3 col-md-8">
              <label for="txtEmail" class="form-label">Email</label>
              <input type="email" class="formControl" id="txtEmail" placeholder="xxxx@xxx.com" name="email">
            </div>
            <div class="mb-3 col-md-6">
              <label for="txtTelefone" class="form-label">Telefone</label>
              <input type="tel" class="formControl" id="txtTelefone" placeholder="1199999999" name="telefone">
              <span class="form-text">(DDD+Tel)</span>
            </div>
          </fieldset>
        </div>
        <div class="col-sm-12 col-md-6">
          <fieldset class="row">
            <b>
              <legend>Endereço</legend>
            </b>
            <div class="mb-3">
              <label for="txtCEP" class="form-label">CEP</label>
              <div class="input-group">
                <input style="width: 300px" type="text" class="formControl" id="txtCEP" name="cep">
              </div>
            </div>
            <div class="mb-3 col-md-4">
              <label for="txtNum" class="form-label">Numero</label>
              <input type="text" class="formControl" id="txtNum" name="numero">
            </div>

            <div class="mb-3 col-md-4">
              <label for="txtCompl" class="form-label">Complemento</label>
              <input type="text" class="formControl" id="txtCompl" name="complemento">
            </div>
          </fieldset>
          <fieldset>
            <legend>Definir senha</legend>
            <div class="mb-3">
              <label for="txtSenha" class="form-label">Senha</label>
              <input type="password" class="formControl" id="txtSenha" name="senha">
            </div>
            <div class="mb-3">
              <label for="txtSenhaConf" class="form-label">Confirme</label>
              <input type="password" class="formControl" id="txtSenhaConf" name="confirme">
            </div>
          </fieldset>

        </div>

      </div>
      <hr>
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" value="" id="chkConectar">
        <label for="chkConectar" class="form-check-label">Lembre de mim</label>
      </div>
      <div class="mb-3 col-md-4">
        <button type="button" class="btn btn-primary" onclick="botao1()">Cancelar</button>
        <button type="submit" id="enviar" name="Enviar" 
        class="btn btn-primary">Enviar</button>
      </div>
    </form>
</body>

<?php
  include("../footer.php");
?>

</html>
<?php 
        
        if(isset($_POST["Enviar"])) {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $dtNascimento = $_POST['dtNascimento'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $cep = $_POST['cep'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            $senha = $_POST['senha'];
            $confirma = $_POST['confirme'];

            if($senha == $confirma){
                $senha = md5($senha);
                $projeto = new mysqli("localhost", "root", "", "projeto");
                $sql = "INSERT INTO usuario(codigo, nome, cpf, dtNascimento, email, telefone, cep, 
                                            numero, complemento, senha, confirme) 
                VALUES (DEFAULT, '$nome','$cpf','$dtNascimento',
                '$email','$telefone','$cep','$numero','$complemento','$senha','$confirma');";
                $err = mysqli_query( $projeto, $sql);
                echo "<h4>Registro inserido com sucesso</h4>";
                mysqli_close($projeto);
            } else {
                $_SESSION['error'] = "Senha incorreta";
            }
            include('CadastroValidado.html');
            
            
        }
      
    ?>