<?php if(!isset($do)){?>
    <div class="form-group">
      <label for="ID">ID </label>
      <input type="number" class="form-control" name="ID" value="<?= $id ?>" disabled="" />
   </div>
<?php } else {?>
    <div class="form-group">
      <label for="ID">ID </label>
      <input type="number" class="form-control" name="ID" value="<?= $id ?>" disabled="" />
   </div>
<?php }?>
  <div class="form-group">
      <label for="NM" >Nome </label>
        <input type="text"  class=" form-control" name="NM" value="<?= $nm ?>" required/>
   </div>

<div class="form-group">
      <label for="RA">Raça </label>
        <input type="text" class="form-control"name="RA" value="<?= $ra ?>" required/>
</div>

   <div class="form-group">
      <label for="PE">Peso </label>
        <input type="text" class="form-control" name="PE" value="<?= $pe ?>" required/>
     </div>

    <div class="form-group">
      <label for="IDA">Idade </label>
        <input type="number" class="form-control" name="IDA" min="0" max="20" value="<?= $ida ?>" required/>
    </div>

     <div class="form-group">
      <label for="SE">Sexo </label>
        <input type="text" class="form-control" name="SE" value="<?= $se ?>" required/>
       </div>
    <?php if(!isset($do)){?>
     <div class="form-group">
     	<?php
            $con = abreConexao();
            $query = mysqli_query($con, "select id, nome from dono");
        ?>
      <label for="DO">Dono </label>
        <input list="donos" class="form-control" name="DO" required/>
        <datalist id="donos">
            <?php
            while($prod = mysqli_fetch_array($query))
            {
                echo "<option value=".$prod['nome']." >".$prod['id']."</option>"; 
            }
            ?>
        </datalist>
            <?php mysqli_close($con); ?>
       </div>
    <?php }?>