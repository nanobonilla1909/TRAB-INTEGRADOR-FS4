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
      <form action="login.php" method="get">
        <div class="form-group">
          <label>E-Mail</label><br>
          <input class="form-control" type="text" name="user" required><br>
        </div>
        <div class="form-group">
          <label>Contraseña</label><br>
          <input class="form-control" type="password" name="pass" required>
        </div>
        <label><input type="checkbox"> Recordarme</label>
        <ul>
          <li><a href="#">Olvidaste tu contraseña?</a></li>
          <li><a href="#">Aun no tenes usuario? Registrarse</a></li>
        </ul>
        <button type="submit">Ingresar</button>
        <button type="button">Cancelar</button></br>


    </div>
    </form>
  </body>
</html>
