<?php   
 session_start();
 
 ?>  

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>CRUD</title>
  </head>
  <?php include("cabecalho.php"); ?>
  <body>
  <center>
    <h1> <?php echo $MensagemErro; ?></h1>
    <button class="btn btn-default"/><a href="indexGet.php">Voltar</a></button>
    </center>
  </body>
</html>