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
</body>
<main>
        <div class="container m-5" style="min-width: 375px;">
            <div class="row justify-content-center">
                <form class="col-sm-12 col-md-20 col-lg-6" method="post" action="../contato.php?enviar=1">
                    <h1 class="mb-3">Entre em Contato</h1>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" autofocus id="txtNome" name="nome" placeholder=" " style="width: auto;" required>
                        <label for="txtNome">Nome Completo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" autofocus id="txtEmail" name="email" placeholder=" " style="width: auto;">
                        <label for="txtEmail">E-mail</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" autofocus id="txtTel" name="tel" placeholder=" " style="width: auto;">
                        <label for="txtTel">Telefone</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" autofocus id="txtEndereco" name="endereco" placeholder=" " style="width: auto;">
                        <label for="txtEndereco">Endereço</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="txtMensagem" placeholder=" " name="mensagem" style="height: 200px; width: auto;"></textarea>
                        <label for="txtMensagem">Mensagem</label>
                    </div>

                    <button class="btn btn-lg btn-danger" type="button" onclick="validar();">Enviar Mensagem</button>
                </form>
				<?php enviarEmail(); ?>
            </div>
			
                    <p class="mt-3">
                        Faremos nosso melhor para responder sua mensagem em até 2 dias úteis.
                    </p>

                    <p class="mt-3"> 
                        Atenciosamente,</br>
                        Salão Amor de Mãe
                    </p>
        </div>
    <?php include("../footer.php");?>
</main>
</html>
<script lang="javascript">
    function validar() {
        if(txtNome.value.lenght < 3){
            alert("Informe seu nome completo");
            txtNome.value = " ";
            txtNome.focus();
            return false;
        }
        if(txtEmail.value.lenght < 6 || txtEmail.value.indexOf("@") <= 0 || txtEmail.value.lastIndexOf(".") <= email.value.indexOf("@")){
            alert("Informe um email valido");
            txtEmail.value = " ";
            txtEmail.focus();
            return false;
        }
        if(txtTel.value.lenght < 8){
            alert("Informe um telefone valido");
            txtTel.value = " ";
            txtTel.focus();
            return false;
        }
        if(txtMensagem.value.lenght <= 10){
            alert("Informe a mensagem completa");
            txtMensagem.value = " ";
            txtMensagem.focus();
            return false;
        }
        frm1.submit();
    }
</script>
<?php 
function enviarEmail(){
    if(isset($_GET["enviar"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["tel"];
        $endereco = $_POST["endereco"];
        $mensagem = $_POST["mensagem"];
		$msg = "<b>Nome:</b>$nome<br/><b>Email:</b>$email<br/><b>Telefone:</b>$telefone<br/><b>Endereco:</b>$endereco<br/><b>Mensagem:</b>$mensagem<br/>";
		$emailEnviar = "gabriela.gomes9528@gmail.com";
		$destino = $emailEnviar;
		
		$header = "MIME-Version: 1.0\r\n";
		$header = 'Content-Type: text/html; charset=UTF-8' . "\r\n";
		$header = 'From: $nome <$email>';
		
		$enviaEmail = mail($destino, $msg, $header);
		
		if($enviaEmail){
			echo "<h4>Email enviado com sucesso!</h4>";
		}else{
			echo "<h4>Ocorreu um erro no envio de email</h4>";
		}
    }
}
?>