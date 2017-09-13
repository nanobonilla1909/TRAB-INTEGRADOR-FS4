<?php
if (!empty($_POST)) {
  $error = [];

  if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'Revisar email';
  }

  // echo "<pre>";
  // print_r($error);
  // echo "</pre>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
  <div class="container">
    <h1>Ingresar</h1>
    <form action="login.php" method="post">
      <label>E-Mail</label><br>
      <input class="form-control" type="text" name="email">
      <?php if(!empty($error['email'])) { ?>
      <small><?php echo $error['email'];} ?></small>
      <br>
      <label>Contraseña</label><br>
      <input class="form-control" type="password" name="pass">
      <label><input type="checkbox"> Recordarme</label>
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
