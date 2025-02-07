<?php

  namespace PHP\Modelo;
  require_once('..\DAO\Conexao.php');
  require_once('..\DAO\Inserir.php');
  use PHP\Modelo\DAO\Conexao;
  use PHP\Modelo\DAO\Inserir;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../IMG/logoSenac.png"></link>
  <link rel="stylesheet" type="text/css" href="#">
  <title>Controle de Resíduos</title>

</head>
<body>
    <img src="../IMG/logoSenac.png" width="150px">
  <form id="formulario" name="formulario" method="POST" action="Registrar.php">
    <div id="principal">
      <h1>Controle de Resíduos</h1>
      <h2>Data</h2>
      <input type="date" id="data" name="data">
      <br>
      <h2>Categoria do Resíduo</h2>
      <input type="password" placeholder="Senha de acesso" id="senha" name="senha">
      <br>
      <h2>Peso</h2>
      <input type="text" placeholder="1.25kg" id="peso" name="peso">
      <br><br>
      

      <br><br><br>
      <a href=""><input type="button" type="submit" onclick="alert('Resíduo cadastrado com sucesso!')" value="Cadastrar Resíduo!">

      <br><br>
      <a href="LoginFuncionario.php" id="jaTenhoConta">Já tenho uma conta</a>
    </div>
  </form>
</body>
</html>