<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="container">
      <h1>Registrate</h1>
      <form class="register" action="index.html" method="post">
        <label>Nombre</label><br>
        <input class="form-control" type="text" name="name" value=""><br>
        <label>Apellido</label><br>
        <input class="form-control" type="text" name="surname"><br>
        <label>E-mail</label><br>
        <input class="form-control" type="text" name="email"><br>
        <label>Usuario</label><br>
        <input class="form-control" type="text" name="email"><br>
        <label>Contraseña</label><br>
        <input class="form-control" type="password" name="pass"><br>
        <label>Confirmar contraseña</label><br>
        <input class="form-control" type="password" name="pass-confirm" value=""><br>
        <input type="checkbox" name="terms" value=""> Soy mayor de 18 años y acepto los <span>Terminos y condiciones</span><br>
        <input type="checkbox" name="newsletter" value=""> Deseo recibir noticias del newsletter<br>
        <div class="submit">
          <a href="#"><button type="submit" name="register">Registrarme</button></a>
          <a href="home.php"><button type="button">Cancelar</button></a>
        </div>
      </form>
    </div>
  </body>
</html>
