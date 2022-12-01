<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: usuario.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM cadastro WHERE id";
    }
    else
    {
        $sql = "SELECT * FROM cadastro ORDER BY id ASC";
    }
    $id = $_GET['id'];
    $result = $conexao->query($sql);
    if($result->num_rows > 0)
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['id'];
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
        background-image: url("https://img.freepik.com/fotos-gratis/por-do-sol-na-cidade-com-arranha-ceus_1127-192.jpg?size=626&ext=jpg&ga=GA1.2.879937164.1667940126");
        background-repeat: no-repeat;
        background-size: 100%;
        color: white;
        text-align: center;            
        }
        
        .box {
            margin: auto;
            width: 270px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            color: #fff;
            padding: 30px;
            margin-top: 100px;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            }
  
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border: solid;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="usuario.php" class="inputSubmit">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">Email</label>
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit" class="inputSubmit">
            </fieldset>
        </form>
    </div>
</body>
</html>