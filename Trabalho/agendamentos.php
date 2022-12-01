<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
		$empreendimentos = $_POST['empreendimentos'];
		$data = $_POST['data'];
		$horario = $_POST['horario'];

        $result = mysqli_query($conexao, "INSERT INTO agendamentos(nome,email,telefone,empreendimento,data,horario) 
        VALUES ('$nome','$email','$telefone','$empreendimentos','$data','$horario')");

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
    <title>Agendamentos</title>

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
							<form action="agendamentos.php"  method="POST" id="myText">
								<table width="73%" align="center">
									<tr>
										<td>
											<label>NOME</label><br>
											<input class="texto" name="nome" type="text" size="75" id="nome" placeholder="Nome">
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
										<tr>
											<td><label>E-MAIL</label><br>
											<input class="texto" name="email" type="text" id="email" size="75">
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<label>TELEFONE</label><br>
											<input class="texto" name="telefone" type="text" id="telefone" size="20">
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<label>Empreendimento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp; &nbsp;Data &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                                 Hora</label><br>
											<select name="empreendimentos">
												<option>Selecione um Empreendimento</option>
												<option>Lagos</option>
												<option>Douro</option>
												<option>Amarante</option>
												<option>Tejo</option>
											</select>
                                            <input class="texto" type="date" name="data">
											<select name="horario">
												<option>Selecione um Horario</option>
												<option>10:00</option>
												<option>12:00</option>
												<option>14:00</option>
												<option>16:00</option>
											</select>
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
									<input type="hidden" name="_subject" value="Novo Agendamento">
									<input type="text" name="_honey" style="display:none">
									<input type="hidden" name="_captcha" value="false">
									<input type="hidden" name="_template" value="table">
									<input type="hidden" name="_next" value="http://localhost/aulas/Trabalho/index.php">
								</form>
								</form>
			</table>
						
							
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
function funcao1()
{
alert("Seu agendameto foi enviado");
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
 