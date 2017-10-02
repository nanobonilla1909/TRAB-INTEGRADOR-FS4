<?php

	require_once("functions.php");

	if (estaLogueado()){
		header("Location:index.php");
	}

$arrayErrores = [];
if ($_POST) {

  //Validar
  $arrayErrores = processLogin($_POST);

  //Si es valido, loguear
  if (count($arrayErrores) == 0) {
    loguear($_POST["email"]);
    if (isset($_POST["recordame"])) {
      recordarUsuario($_POST["email"]);
    }
    header("Location:index.php");exit;
  }
}


include("header.php");
?>
<?php if (count($arrayErrores) > 0) : ?>
	<ul style="color:red">
		<?php foreach($arrayErrores as $error) : ?>
			<li><?=$error?></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
  <body>
  <div class="container">
    <h1>Ingresar</h1>
    <form action="login.php" method="post">
      <label class="nombrecampo">E-Mail</label><br>
      <input class="form-control" type="text" name="email">
      <?php if(!empty($error['email'])) { ?>
      <small><?= $error['email'];} ?></small>
      <br>
      <label class="nombrecampo">Contraseña</label><br>
      <input class="form-control" type="password" name="pass">
      <label><input type="checkbox" name="recordame"> Recordarme</label>
      <ul>
        <li><a href="register.php">Olvidaste tu contraseña?</a></li>
        <li><a href="register.php">Aun no tenes usuario? Registrarse</a></li>
      </ul>
      <div class="submit">
        <button type="submit">Ingresar</button>
        <a href="index.php"><button type="button">Cancelar</button></a></br>
      </div>
    </form>
  </div>
  </body>
</html>
