   
   <div class="form-group">
      <label for="ID">ID</label>
        <input type="number" class="form-control"  name="ID" value="<?= $id ?>" required />
       
      </div>

      <div class="form-group">
      <label for="DA">Data</label>
      <?php 
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
      ?>
        <input type="date" class="form-control" name="DA" min="<?=$date?>" value="<?= $da ?>" required/>
       
      </div>

      <div class="form-group">
      <label for="HO">Hora</label>
        <input type="time" class="form-control" name="HO" min="08:00" max="20:00" value="<?= $ho ?>" required/>
      
      </div>

      <div class="form-group">
      <label for="TIPO">Tipo Consulta</label>
        <input type="text"  class="form-control"name="TIPO" value="<?= $tipo ?>" required/>
      
        <div class="form-group">
            <?php
            include("conexao.php");
            $con = abreConexao();
            $query = mysqli_query($con, "select id, nome from pet");
            ?>
      <label for="CAO">Cão</label>
        <input list="pet" class="form-control" name="CAO" value="<?= $cao ?>" required/>
        <datalist id="pet">CAO
            <?php
            while($prod = mysqli_fetch_array($query))
            {
                echo "<option value=".$prod['id']." >".$prod['nome']."</option>"; 
            }
            ?>
        </datalist>
            <?php mysqli_close($con); ?>
       
      </div>
