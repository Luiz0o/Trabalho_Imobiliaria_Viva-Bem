<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
		$mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO saq(nome,email,telefone,mensagem) 
        VALUES ('$nome','$email','$telefone','$mensagem')");

		header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="nav.css" rel="stylesheet">
	<link href="form.css" rel="stylesheet">
    <title>Fale conosco</title>
</head>
<body>
<nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          <div class="logo">
            <h1>Imobiliaria Viva-Bem</h1>
          </div>
          <div class="menu-items">
            <li><a href="index.php">Home</a></li>
            <li><a href="SAQ.php">Fale Conosco</a></li>
            <li><a href="agendamentos.php">Agendamentos</a></li>
            <li><a href="login.php">Entrar</a></li>
          </div>
        </div>
      </div>
    </nav>

    <div id="content">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<br>
						<div id="sub_content">
							<br><br>

						<form action="saqDB.php" method="POST" id="myText">
								<table width="73%" align="center">
									<tr>
										<td>
											<label>NOME</label><br>
											<input class="texto" name="nome" type="text" size="75" id="nome" required >
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
										<tr>
											<td><label>E-MAIL</label><br>
											<input class="texto" name="email" type="text" id="email" size="75" required >
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<label>TELEFONE</label><br>
											<input class="texto" name="telefone" type="text" id="telefone" size="20" required >
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<label>MENSAGEM</label><br>
											<textarea class="texto" name="mensagem" cols="70" rows="10" id="mensagem" required></textarea>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td align="center">
										<input class="inputSubmit" type="submit" name="submit" id="submit" onclick="funcao1()">
										</td>
									</tr>
									<input type="hidden" name="_subject" value="Novo Atendimento">
									<input type="text" name="_honey" style="display:none">
									<input type="hidden" name="_captcha" value="false">
									<input type="hidden" name="_template" value="table">
									<input type="hidden" name="_next" value="http://localhost/aulas/Trabalho/index.php">
									</form>
							
								</table>
							

							<br><br>

						</div>
					</td>
				</tr>
			</table>
		</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
function funcao1()
{
alert("Sua mensagem foi enviada");
}

$(document).ready(function funcao1() {
 
 document.addEventListener("submit", function () {
     var dados = $('#myText').serialize();

     $.ajax({
         type : 'POST',
         url  : 'https://formsubmit.co/luizfelipemf2001@gmail.com',
         data : dados,
         dataType: 'json',
         success :  console.log
     });

     return false;
 });
});

</script>
 