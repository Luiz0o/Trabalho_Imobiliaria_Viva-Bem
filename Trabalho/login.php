<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="formulario.css" rel="stylesheet">
    <link href="nav.css" rel="stylesheet">
    <title>Tela de login</title>
    <style>
      body{
    background-image: url("https://habitability.com.br/wp-content/uploads/2022/04/Cidadade-compacta-570x380.png");
    background-repeat: no-repeat;
    background-size: 100%;
  } 
    </style>
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

    <div class="box">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" id="texto" name="email" placeholder="Email">
            <br><br>
            <input type="password" id="texto" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submit" class="inputSubmit">
            <br><br>
            <a class="inputSubmit" href="formulario.php">Cadastrar</a>
        </form>
    </div>
</body>
</html>