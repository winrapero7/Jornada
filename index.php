<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jornada ITESZ</title>

    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/estilos.css" rel="stylesheet">
    <script defer src="JS/all.js">

    </script>

  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">este boton despliega la barra de navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand" href="#">Jornadas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Partidos</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Estadisticas</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><h4><a href="Login.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Iniciar</a></h4></li>

            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <!--
xs pantalla pequeña(mobil)
sm pantalla mediana(tablet)
md pantalla ordenador pequeño
lg pantallas grandes
-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  Deporte: <i class="iconoD far fa-futbol"></i> Etapa:
                </div>
                <div class="panel-body">
                  <p>Todavia no hay entradas que mostrar</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  Deporte: <i class="iconoD far fa-futbol"></i> Etapa:
                </div>
                <div class="panel-body">
                  <?php
                    include_once 'app/conexion.inc.php';
                    conexion :: abrir_conexion();
                    conexion :: cerrar_conexion();
                   ?>
                  <p>Todavia no hay entradas que mostrar</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="JS/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
  </body>
</html>
