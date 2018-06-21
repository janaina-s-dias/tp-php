<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">sospet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="perfil.php">Perfil</a></li>
        <li><a href="servicos.php">Serviços</a></li>
        <li><a href="sobre.php">Sobre</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
        <?php  
if(isset($_SESSION['username'])){
  	?>
        <button type="button" name="logout" id="logout" class="btn btn-success btn-md" data-toggle="modal" data-target="#loginModal">SAIR</button>
    <?php  } else { ?>
        <button type="button" name="login" id="login" class="btn btn-success btn-md" data-toggle="modal" data-target="#loginModal">ENTRAR</button>
 <?php  } ?>
      </ul>
    </div>
  </div>
</nav>