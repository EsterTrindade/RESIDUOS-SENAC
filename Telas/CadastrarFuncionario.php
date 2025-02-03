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
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/Registrar.css">
  <title>Registrar</title>
  <style>
    #faltouInformacoes{
      font-size: 15px;
      color: red;
    }
  </style>
  <script src="Scripts/Registrar.js"></script>
</head>
<body>
  <form id="formulario" name="formulario" method="post" action="Registrar.php" onsubmit="return valida()">
    <div id="principal">
      <h1>Registrar</h1>
      <br>
      <input type="text" placeholder="Nome de Usuário" id="usuario" name="usuario">
      &nbsp;
      &nbsp;
      <input type="password" placeholder="Senha de acesso" id="senha" name="senha">
      <br><br>
      <input type="text" placeholder="E-mail" id="email" name="email">
      <br><br>
      <div id="faltouInformacoes"></div>
      <br>
      <input type="checkbox" id="checkbox"><label>Eu li e concordo com os </label><a href="" id="termos" target="_blank">Termos e condições</a>
      <br><br><br>
      <input type="submit" id="criar-conta" name="criar-conta" value="Criar conta">
      <br><br>
      <a href="Login.php" id="jaTenhoConta">Já tenho uma conta</a>
    </div>
  </form>
</body>
</html>