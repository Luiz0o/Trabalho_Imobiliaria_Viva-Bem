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