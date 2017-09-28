<?php
	include("header.php");
?>
<?php
require("functions.php");
if ($_POST) {
  $errors = validateInformation($_POST);
}
?>

  <body>
    <div class="container">
      <h1>Registrate</h1>
      <form class="register" action="register_process.php" method="post" enctype="multipart/form-data">
        <label>Nombre</label><br>
        <input class="form-control" type="text" name="name" value="<?=(!empty($_POST['name'])?$_POST['name']:"")?>">
        <?php if(!empty($errors['name'])) { ?><small><span class="error"><? echo $errors['name']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label>Apellido</label><br>
        <input class="form-control" type="text" name="surname" value="<?=(!empty($_POST['surname'])?$_POST['surname']:"")?>">
        <?php if(!empty($errors['surname'])) { ?><small><span class="error"><? echo $errors['surname']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label>E-mail</label><br>
        <input class="form-control" type="text" name="email" value="<?=(!empty($_POST['email'])?$_POST['email']:"")?>">
        <?php if(!empty($errors['email'])) { ?><small><span class="error"><? echo $errors['email']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label>Foto de Perfil</label><br>
        <input type="file" name="avatar"><br>
        <label>Contraseña</label><br>
        <input class="form-control" type="password" name="pass" value="<?=(!empty($_POST['pass'])?$_POST['pass']:"")?>">
        <?php if(!empty($errors['pass'])) { ?><small><span class="error"><? echo $errors['pass']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label>Confirmar contraseña</label><br>
        <input class="form-control" type="password" name="pass-c" value="<?=(!empty($_POST['pass-c'])?$_POST['pass-c']:"")?>">
        <?php if(!empty($errors['pass-c'])) { ?><small><span class="error"><? echo $errors['pass-c']?></span></small><br><?php } else { echo "<br>"; } ?>
        <input type="checkbox" name="terms" value=""> Soy mayor de 18 años y acepto los <strong>Terminos y condiciones</strong>
        <?php if(!empty($errors['terms'])) { ?><br><small><span class="error"><? echo $errors['terms']?></span></small><br><?php } else { echo "<br>"; } ?>
        <input type="checkbox" name="newsletter" value=""> Deseo recibir noticias del newsletter<br>
        <div class="submit">
          <a href="register.php"><button type="submit" name="register">Registrarme</button></a>
          <a href="index.php"><button type="submit" name="cancel">Cancelar</button></a>
        </div>
      </form>
    </div>
  </body>
</html>
