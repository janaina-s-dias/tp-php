<?php   
 session_start();
 
 ?>  

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <h1>Ocorreu uma falha</h1>
    <p><?= $MensagemErro ?></p>
    <a href="index.php">Voltar</a>
  </body>
</html>