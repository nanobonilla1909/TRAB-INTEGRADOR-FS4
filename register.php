<?php
require("functions.php");
if ($_POST) {
  // valido informacion
  $errors = validateInformation($_POST);
  // si esta ok
  if(count($errors) == 0){
    // crea user
    $user = doUser($_POST);
    // lo guarda
    saveUser($user);
    // redirecciona al home
    header("Location:index.php");exit;
  }
}


?>
<?php
	include("header.php");
?>
    <div class="container">
      <h1>Registrate</h1>
      <form class="register" action="register.php" method="post" enctype="multipart/form-data">
        <label class="nombrecampo">Nombre</label><br>
        <input class="form-control" type="text" name="name" value="<?=(!empty($_POST['name'])?$_POST['name']:"")?>">
        <?php if(!empty($errors['name'])) { ?><small><span class="error"><?= $errors['name']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Apellido</label><br>
        <input class="form-control" type="text" name="surname" value="<?=(!empty($_POST['surname'])?$_POST['surname']:"")?>">
        <?php if(!empty($errors['surname'])) { ?><small><span class="error"><?= $errors['surname']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">E-mail</label><br>
        <input class="form-control" type="text" name="email" value="<?=(!empty($_POST['email'])?$_POST['email']:"")?>">
        <?php if(!empty($errors['email'])) { ?><small><span class="error"><?= $errors['email']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Foto de Perfil</label><br>
        <input type="file" name="avatar">
        <?php if(isset($errors['avatar'])) { ?><small><span class="error"><?= $errors['avatar']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Contraseña</label><br>
        <input class="form-control" type="password" name="pass" value="<?=(!empty($_POST['pass'])?$_POST['pass']:"")?>">
        <?php if(!empty($errors['pass'])) { ?><small><span class="error"><?= $errors['pass']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Confirmar contraseña</label><br>
        <input class="form-control" type="password" name="pass-c" value="<?=(!empty($_POST['pass-c'])?$_POST['pass-c']:"")?>">
        <?php if(!empty($errors['pass-c'])) { ?><small><span class="error"><?= $errors['pass-c']?></span></small><br><?php } else { echo "<br>"; } ?>
        <input type="checkbox" name="terms" value="1"> <span class="nombrecampo">Soy mayor de 18 años y acepto los <strong>Terminos y condiciones</strong></span>
        <?php if(isset($errors['terms'])) { ?><br><small><span class="error"><?= $errors['terms']?></span></small><br><?php } else { echo "<br>"; } ?>
        <input type="checkbox" name="newsletter" value=""> <span class="nombrecampo"> Deseo recibir noticias del newsletter</span><br>
        <div class="submit">
          <a href="register.php"><button type="submit" name="">Registrarme</button></a>
          <a href="index.php"><button type="button" name="cancel">Cancelar</button></a>
        </div>
      </form>
    </div>
    <?php
    	include("footer.php");
    ?>
