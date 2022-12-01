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
    <title>Página de usuario</title>
    <style>
        body{
            background-image: url("https://img.freepik.com/fotos-gratis/por-do-sol-na-cidade-com-arranha-ceus_1127-192.jpg?size=626&ext=jpg&ga=GA1.2.879937164.1667940126");
            background-repeat: no-repeat;
            background-size: 100%;
            color: white;
            text-align: center;
        }

        table {
            background-color: #fff ;
        }

        th, td {
            color: #000
        }

        .success{
            background-color: #228B22;
        }

        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PÁGINA DE BOLETOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="usuario.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 ">

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Serviço</th>
                <th>Parcela</th>
                <th>Valor Original</th>
                <th>Valor a Pagar</th>
                <th>Valor Pago</th>
                <th>Vencimento</th>
                <th>Situação</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
                <tr class="">
                    <td>
                    </td>
                    <td>Mensalidade Douro</td>
                    <td>4</td>
                    <td>R$ 687,15</td>
                    <td>R$ 478,30</td>
                    <td>R$ 0,00</td>
                    <td>15/12/2022</td>
                    <td>Aberto</td>
                    <td>
                    <a href="boleto.pdf" download="boleto"> <button type="button" class="btn btn-success btn-sm">Imprimir Boleto</button>                    
                    </td>

                </tr>
                <tr class="">
                    <td>
                    </td>
                    <td>Mensalidade Douro</td>
                    <td>3</td>
                    <td>R$ 184,53</td>
                    <td>R$ 161,70</td>
                    <td>R$ 0,00</td>
                    <td>15/11/2022</td>
                    <td>Aberto</td>
                    <td>
                    <a href="boleto.pdf" download="boleto"> <button type="button" class="btn btn-success btn-sm">Imprimir Boleto</button>                    
                </td>

                </tr>
                <tr class="success">
                    <td>
                    </td>
                    <td>Mensalidade Douro</td>
                    <td>2</td>
                    <td>R$ 847,78</td>
                    <td>R$ 619,05</td>
                    <td>R$ 619,05</td>
                    <td>15/10/2022</td>
                    <td>Pago</td>
                    <td>
                    </td>

                </tr>
                <tr class="success">
                    <td>
                    </td>
                    <td>Mensalidade Douro</td>
                    <td>1</td>
                    <td>R$ 649,97</td>
                    <td>R$ 445,72</td>
                    <td>R$ 445,72</td>
                    <td>15/09/2022</td>
                    <td>Pago</td>
                    <td>
                    </td>

                </tr>

        </tbody>
    </table>

</div>

</div>



</div>
</body>
</html>