<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pulmahue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <header>
        <h1 class="logo"><a href="index.php"><img src="" alt=""><img src="img/logo1.png" alt=""></a></h1>
        <form class="buscador">
          <div>
            <!-- <input type="text" class="form-control placeholder="Busque aqui su producto">
            <button type="submit" class="btn btn-default">Buscar</button> -->
            <input type="text" class="form-controlx placeholder="Buscar">
            <button type="submit" class="btn btn-default">Buscar</button>
          </div>
        </form>
        <div class="login">
          <ul>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
            <li><a href="login.php">Ingresar</a></li>
            <li><span> | </span></li>
            <li><a href="register.php">Registrarse</a></li>
          </ul>
        </div>
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
              <li><a href="#">Promos</a>
              </li>
              <li><a href="#">Quienes somos <span class="sr-only">(current)</span></a>
              </li>
              <li><a href="faqs.php">Preguntas Frecuentes</a>
              </li>
            </ul>
            <!-- <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
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
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
      <div class="jumbotron">
        <h1>Más que una cerveza</h1>
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver</a></p>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/golden.jpg" alt="...">
              <div class="caption">
                <h3>⁠⁠⁠Golden</h3>
                <p>Es lo más parecido a una cerveza clásica de supermercado que vas a encontrar en el mundo artesanal. Suave, de amargor y alcohol bajos.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/pale-ale.jpeg" alt="...">
              <div class="caption">
                <h3>Pale ale</h3>
                <p>Una rubia más amarga e intensa que la golden, pero también ligera y refrescante. Tiene más presencia de lúpulo.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/ipa.jpg" alt="...">
              <div class="caption">
                <h3>IPA</h3>
                <p>La sigla de India pale ale, es una versión de pale ale con altas dosis de flor de lúpulo. Tiene más cuerpo, es más amarga.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/scotch-ale.jpg" alt="...">
              <div class="caption">
                <h3>Scotch ale</h3>
                <p>Una cerveza rojiza y suave, con amargor bajo y notas de caramelo. Una versión un poco más dulce de su vecina irlandesa, la Irish red ale.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/honey.jpg" alt="...">
              <div class="caption">
                <h3>Honey</h3>
                <p>Contiene miel, lo que la hace más dulce, pero muchas versiones también son más alcohólicas.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/porter.jpg" alt="...">
              <div class="caption">
                <h3>Porter</h3>
                <p>Una cerveza clásica inglesa, negra y liviana, con notas de chocolate y café.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/stout.jpg" alt="...">
              <div class="caption">
                <h3>Stout</h3>
                <p>Tiene versiones más dulces como la cream stout y versiones más amargas e intensas como la dry stout. Es negra, con mucho cuerpo y un carácter fuerte a café.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/imperial.jpg" alt="...">
              <div class="caption">
                <h3>Imperial</h3>
                <p>Cuando se le agrega la palabra "imperial" antes del nombre, quiere decir que es más amarga, más intensa, más alcohólica, más todo. En estilos de cerveza, "imperial" significa más.</p>
                <p><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer" id="footer">
        <div class="container">
          <ul>
            <li><a href="https://twitter.com/">Twitter</a></li>
            <li><a href="https://es-la.facebook.com/">Facebook</a></li>
            <li><a href="https://www.instagram.com/">Instagram</a></li>
            <li><a href="faqs.php">FAQs</a></li>
          </ul>
          <p>&copy; Copyright Pulmahue</p>
        </div>
      </footer>

    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
