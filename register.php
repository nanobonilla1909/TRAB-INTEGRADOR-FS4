<?php
    require_once("soporte.php");
    require_once("class/validadorUsuario.php");

    $repoUsers = $repo->getRepositorioUsuarios();

    if ($auth->isLogged()) {
        header("Location:index.php");exit;
    }
    $errors = [];
    $nombreDefault = "";
    $emailDefault = "";
    $surnameDefault = "";

    if (!empty($_POST))
    {
      $validador = new ValidadorUsuario();
    
      //Se envió información
      $errors = $validador->validate($_POST, $repo);

      if (empty($errors))
      {
        //No hay errores
        //Lo registro
        $user = new User(
            null,
            $_POST["name"],
            $_POST["surname"],
            $_POST["email"],
            $_POST["password"]
        );
        $user->setPassword($_POST["password"]);
        $user->save($repoUsers);
        $user->setAvatar($_FILES["avatar"]);

        //Redirijo al index
        header("Location:index.php");exit;
      }

      if (!isset($errors["name"]))
      {
          $nombreDefault = $_POST["name"];
      }
      if (!isset($errors["surname"]))
      {
          $surnameDefault = $_POST["surname"];
      }
      if (!isset($errors["email"]))
      {
          $emailDefault = $_POST["email"];
      }
    }

?>
<?php
	include("header.php");
?>
    <div class="container-login">
      <h1>Registrate</h1>
      <form class="register" action="register.php" method="post" enctype="multipart/form-data">
        <label class="nombrecampo">Nombre</label><br>
        <input class="form-control" type="text" name="name" value="<?=(!empty($_POST['name'])?$_POST['name']:"")?>">
        <?php if(!empty($errors['name'])) { ?><small class="error"><?= $errors['name']?></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Apellido</label><br>
        <input class="form-control" type="text" name="surname" value="<?=(!empty($_POST['surname'])?$_POST['surname']:"")?>">
        <?php if(!empty($errors['surname'])) { ?><small><span class="error"><?= $errors['surname']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">E-mail</label><br>
        <input class="form-control" type="text" name="email" value="<?=(!empty($_POST['email'])?$_POST['email']:"")?>">
        <?php if(!empty($errors['email'])) { ?><small><span class="error"><?= $errors['email']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Foto de Perfil</label><br>
        <input class="label-upload-file" type="file" name="avatar">
        <?php if(isset($errors['avatar'])) { ?><small><span class="error"><?= $errors['avatar']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Contraseña</label><br>
        <input class="form-control" type="password" name="password" value="<?=(!empty($_POST['password'])?$_POST['password']:"")?>">
        <?php if(!empty($errors['password'])) { ?><small><span class="error"><?= $errors['password']?></span></small><br><?php } else { echo "<br>"; } ?>
        <label class="nombrecampo">Confirmar contraseña</label><br>
        <input class="form-control" type="password" name="password-c" value="<?=(!empty($_POST['password-c'])?$_POST['password-c']:"")?>">
        <?php if(!empty($errors['password-c'])) { ?><small><span class="error"><?= $errors['password-c']?></span></small><br><?php } else { echo "<br>"; } ?>
        <input type="checkbox" name="terms" value="1"> <span class="nombrecampo">Soy mayor de 18 años y acepto los <strong>Terminos y condiciones</strong></span>
        <?php if(isset($errors['terms'])) { ?><br><small><span class="error"><?= $errors['terms']?></span></small><br><?php } else { echo "<br>"; } ?>
        <input type="checkbox" name="newsletter" value=""> <span class="nombrecampo"> Deseo recibir noticias del newsletter</span><br>
        <div class="submit">
          <a href="register.php"><button type="submit" name="">Registrarme</button></a>
          <a href="index.php"><button type="button" name="cancel">Cancelar</button></a>
        </div>
      </form>
    </div>
    </div>
<?php
    include("footer.php");
?>
