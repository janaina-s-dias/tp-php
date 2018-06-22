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
      <center><h1>Serviços</h1></center>  
      <hr>  
      <form action="createServ.php" method="post">
        <?php include("CamposFormServ.php"); ?>


        <button type="submit" class="btn btn-success"  data-toggle="tooltip" title="Adicionar"/>Adicionar</button>
        <!-- <input type="submit" value="Incluir"> -->
        
        <button class="btn btn-default"/><a href="index.php">Voltar</a></button>
        <!-- <input type="submit" value="Incluir">
        <a href="index.php">Voltar</a> -->
      </form>   
      <hr/>
    </div>
  </div>
</div>
<?php include_once("indexServico.php");?>
<center>
<table border="1">
      <tr><td>ID</td><td>Data</td><td>Hora</td><td>Tipo</td><td>Cao</td></tr>
        <?php
          foreach($dados as $i=>$v) {
            echo "<tr>";
            foreach ($v as $i2 => $v2) {
              echo "<td>$v2</td>";
            }
            echo "<td><a href='editarServ.php?id={$v[0]}'>Editar</a></td>";
            echo "<td><a href='deleteServ.php?id={$v[0]}'>Excluir</a></td>";
            echo "<tr>";
          }
        ?>
    </table>
    </center>
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