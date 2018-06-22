<?php   
 session_start();
 
 ?>  

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <?php include("cabecalho.php"); ?>
  <body>
  <div class="container-fluid text-center">    
  <div class="row content">
    
      <!-- Centro -->
    <div class="col-sm-12 text-left"> 
      <center><h1>Pets</h1></center>
      
       
      <hr>  
      
      <form action="createPet.php" method="post">
        <?php include("CamposFormPet.php"); ?>

        <!-- <input type="submit" value="Incluir">
        <a href="index.php">Voltar</a> -->

        <button type="submit" class="btn btn-success"  data-toggle="tooltip" title="Adicionar"/>Adicionar</button>
        <!-- <input type="submit" value="Incluir"> -->
        
        <button class="btn btn-default"/><a href="indexPet.php">Voltar</a></button>
      </form>   
      <hr/>
    </div>
  </div>
</div>
</body>
<?php include("indexPet.php"); ?>
<center>
<table border="1">
      <tr><td>Nome</td><td>Raça</td><td>Peso</td><td>Idade</td><td>Sexo</td><td colspan="2">Ações</td></tr>
        <?php
          foreach($dados as $i=>$v) {
            echo "<tr>";
            foreach ($v as $i2 => $v2) {
              echo "<td>$v2</td>";
            }
            echo "<td><a href='editarPet.php?id={$v[0]}'>Editar</a></td>";
            echo "<td><a href='deletePet.php?id={$v[0]}'>Excluir</a></td>";
            echo "<tr>";
          }
        ?>
    </table>
    </center>
<!-- <footer>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<br/><br/><br/><br/>
<center><p> sospet. desenvolvido por AJ2P. 2018 </p></center>
</footer> -->
<?php include_once("footer.php");?>
</html>