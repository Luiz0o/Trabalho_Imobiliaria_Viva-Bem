<?php
    session_start();
     //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        while($user_data = mysqli_fetch_assoc($result)){
            $fk_id_nivel = $user_data['fk_id_nivel'];
        }

        

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            if($fk_id_nivel == 1){
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location: sistema.php');
            }
            else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: usuario.php');
            }
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>