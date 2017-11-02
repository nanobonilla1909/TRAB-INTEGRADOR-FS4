<?php
  require_once("soporte.php");
  require_once("class/auth.php");

  $repoUsers = $repo->getRepositorioUsuarios();
	$userLogged = $auth->getUserLogged($repoUsers);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pulmahue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
  </head>
  <body>
    <div class="container">
      <header>
        <h1 class="logo"><a href="index.php"><img src="" alt=""><img src="img/logo1.png" alt=""></a></h1>
        <form class="buscador">
          <div class="buscar">
            <!-- <input type="text" class="form-control placeholder="Busque aqui su producto">
            <button type="submit" class="btn btn-default">Buscar</button> -->
            <input type="text" class="form-controlx" placeholder="Buscar">
            <button type="submit" class="btn btn-default">Buscar</button>
          </div>
        </form>

        <?php if (!$auth->isLogged()) {

          if (!isset($_COOKIE["userLogged"])) {?>

            <div class="login">
              <ul>
                <li><a href="login.php">Ingresar</a></li>
                <li><span> | </span></li>
                <li><a href="register.php">Registrarse</a></li>
              </ul>
            </div>

          <?php }
          else {

                 $_SESSION["userLogged"] = $_COOKIE["userLogged"]; ?>
               <div class="login">
                 <ul>
                   <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
                   <li><span> <?= $userLogged->getName() ?> | </span></li>
                   <li><a href="logout.php">Cerrar Sesion</a></li>
                 </ul>
                </div>
          <?php }}

        else { ?>

        <div class="login">
          <ul>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
            <li><span> <?= $userLogged->getName() ?> | </span></li>
            <li><a href="logout.php">Cerrar Sesion</a></li>
          </ul>
        </div>

      <?php } ?>

      </header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Pulmahue</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Variedades <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Golden</a></li>
                  <li><a href="#">Pale ale</a></li>
                  <li><a href="#">IPA</a></li>
                  <li><a href="#">Scotch ale</a></li>
                  <li><a href="#">Honey</a></li>
                  <li><a href="#">Porter</a></li>
                  <li><a href="#">Stout</a></li>
                  <li><a href="#">Imperial</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Nacionales</a></li>
                  <li><a href="#">Importadas</a></li>
                </ul>
              </li>
              <li><a href="#">Promos</a></li>
              <li><a href="#">Quienes somos <span class="sr-only">(current)</span></a></li>
              <li><a href="faqs.php">Preguntas Frecuentes</a></li>
            </ul>
            <!-- <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form> -->
            <!-- <ul class="nav navbar-nav navbar-right">
              <li><a href="car.php">Carrito</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Cambiar correo</a></li>
                  <li><a href="#">Cambiar contraseña</a></li>
                  <li><a href="#">Cerrar sesion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="help.php">Ayuda</a></li>
                </ul>
              </li>
            </ul> -->
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
