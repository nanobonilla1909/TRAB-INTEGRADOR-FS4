<?php
	require_once("soporte.php");
	require_once("class/validadorLogin.php");

	if ($auth->isLogged()) {
		header("Location:index.php");exit;
	}
	$errors = [];
	if ($_POST) {

		$validador = new ValidadorLogin();

		$errors = $validador->validate($_POST, $repo);

		if (empty($errors))
		{
			$user = $repo->getRepositorioUsuarios()->getUserByEmail($_POST["email"]);
			$auth->login($user);
			if ($validador->estaEnFormulario("recordame"))
			{
				$auth->saveCookie($user);
			}
			header("Location:index.php");exit;
		}
	}

	include("header.php");
?>
  <div class="container-login">
    <h1>Ingresar</h1>
    <form class="register" action="login.php" method="post">
      <label class="nombrecampo">E-Mail</label><br>
      <input class="form-control" type="text" name="email">
      <?php if(!empty($errors['email'])) { ?>
      <small><span class="error"><?= $errors['email'];} ?></span></small>
      <br>
      <label class="nombrecampo">Contraseña</label><br>
      <input class="form-control" type="password" name="password">
      <label class="nombrecampo"><input type="checkbox" name="recordame"> Recordarme</label>
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
</div>
	<?php
		include("footer.php");
	?>
