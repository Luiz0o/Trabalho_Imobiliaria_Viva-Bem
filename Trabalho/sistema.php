<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM cadastro WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM cadastro ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Página do Administrador</title>
    <style>
        body{
            background-image: url("https://img.freepik.com/fotos-gratis/por-do-sol-na-cidade-com-arranha-ceus_1127-192.jpg?size=626&ext=jpg&ga=GA1.2.879937164.1667940126");
            background-repeat: no-repeat;
            background-size: 100%;
            color: white;
            text-align: center;
            
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
        
        li {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: left;
            justify-content: left;
            padding: 30px 45px;
            cursor: pointer;
            background-color: #fff;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 26%);
            text-align: left;
            width: 46%;
            float: left;
            margin: 5px;
        }
        a {
            text: center;
            list-style-type: none;
            padding: 0;
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            line-height: 1;
            color: #000000;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA DE ADMINISTRAÇÃO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>Administrador</u></h1>";
    ?>
    <br>
    <div>
        <ul>
            <li><a href="relatorioSAQ.php" alt="Relatorio de Atendimento">Relatorio de Atendimento</a></li>
            <li><a href="relatorioVisitas.php" alt="Relatorio de Agendamentos">Relatorio de Agendamentos</a></li>
            <li><a href="relatorioUsuario.php" alt="Agendamentos">Relatorio de Usuario</a></li>
        </ul>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>