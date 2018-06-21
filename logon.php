<?php  
 session_start();
 date_default_timezone_set('America/Sao_Paulo');
 $connect = mysqli_connect("localhost", "root", "", "sospet");  
 if(isset($_POST["username"]))  
 {  
      $query = "  
      SELECT user_log, user_pass, user_nreal FROM usuario  
      WHERE user_log = '".$_POST["username"]."'  
      AND user_pass = '".$_POST["password"]."'  
      ";  
      
        
      $result = mysqli_query($connect, $query);
      //echo $result;
      foreach ($result as $ind =>$valor){
                            echo "indice:$ind,valor:$valor</br>";
                            } 
      if(mysqli_num_rows($result) > 0)  
      {  
           setcookie("uVisita",date('d/m/Y H:i:s'), (time()+ (3 * 24 * 3600)));
           $temp = $result;
           $_SESSION['username'] = $_POST['username'];
           echo 'Yes';
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);
      session_destroy();
 }  
 ?>  