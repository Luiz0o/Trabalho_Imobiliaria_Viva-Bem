<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $fk_id_nivel = 2;

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,senha,email,telefone,fk_id_nivel) 
        VALUES ('$nome','$senha','$email','$telefone','$fk_id_nivel')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="formulario.css" rel="stylesheet">
    <title>Cadastro</title>
    <style>
        body{
    background-image: url("https://habitability.com.br/wp-content/uploads/2022/04/Cidadade-compacta-570x380.png");
    background-repeat: no-repeat;
    background-size: 100%;
  } 
    </style>
</head>
<body>

    <a class="inputSubmit" href="login.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <input type="submit" name="submit" class="inputSubmit">
            </fieldset>
        </form>
    </div>
</body>
</html>