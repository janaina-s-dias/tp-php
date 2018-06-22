<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Sistema SOS PET</title>
  </head> 
  <?php include("cabecalho.php"); ?>
  <body>
  <div class="container-fluid text-center">    
  <div class="row content">
    
      <!-- Centro -->
    <div class="col-sm-12 text-left"> 
      <center><h1>Editar</h1></center>
     
    <form action="editarPet.php" method="post">
      <?php include("CamposFormPet.php"); ?>
      <input type="submit" name="Incluir">
      <a href="index.php">Voltar</a>
    </form>
    </div>
  </div>
</div>
</body>
<!-- <footer>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<center><p> sospet. desenvolvido por AJ2P. 2018 </p></center>
</footer> -->
<?php include_once("footer.php");?>
</html>