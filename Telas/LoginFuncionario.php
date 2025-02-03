<?php
       namespace PHP\Modelo;
       require_once('..\Funcionario.php');
       require_once('..\DAO\Conexao.php');
       require_once('..\DAO\Inserir.php');
       use PHP\Modelo\Funcionario;
       use PHP\Modelo\DAO\Conexao;
       use PHP\Modelo\DAO\Inserir;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../CSS/index.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Iniciar Sessão</title>

</head>

<body>

  <button><a href="../index.html" id="btnvoltar">Voltar</a></button>
   <img class="wave" src="../IMG/wave.png">
   
   <div class="container">

      <div class="img">
         <img src="../IMG/bg.svg">
      </div>

      <div class="login-content">
         <form method="post" action="">
            <img src="../IMG/avatar.svg">
            <h2 class="title">Bem-Vindo(a)!</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>

               <div class="div">
                  <h5>RE</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>

            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Senha</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="recuperarSenha.html">Esqueci minha Senha</a>
               <a class="font-italic isai5" href="CadastrarFuncionario.php">Cadastre-se</a>
            </div>
            <input name="btningresar" class="btn" type="submit" value="Cadastrar">
         </form>
      </div>

   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>

</body>

</html>