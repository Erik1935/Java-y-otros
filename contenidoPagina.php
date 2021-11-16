<?php
session_start();
      $usuario1 = $_SESSION["usuario"];
     
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilosContenidoPag.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Potencia tu conocimiento con un nuevo lenguaje</title>
  </head>
  <body>
    <div class="contenedor">
      <div class="inicio">
        <nav>
          <h1>Java y otros</h1>
        </nav>
        <h2>Elige un tema para iniciar tu aprendizaje, el contenido es gratis y lo sera siempre</h2>
      </div>
      <!-- Temas de la pagina -->
      <div class="temas">
        <h2>Temas</h2>
        <div class="temas-lista">
          <ul>
            <li><a href="if-else.php?usu=usuario1">If-else</a></li>
            <li><a href="switch.php">Switch-case</a></li>
            <li><a href="while.php?usu=usuario1">Do-While</a></li>
            
          </ul>
        </div> 
        <!-- Lista de temas -->
      </div>
      <div class="consejos">
      <h3>Aprender un nuevo lenguaje aumentara tus posibilidades de un trabajo
        como programador
      </h3>
       <div class="consejos-divididos">
        <div class="consejo1">
          <img src="imagenes/tiempo.png" alt="">
         <p>
          Controla tus tiempos. Puedes divir tu dia y aprender en el momento que
          quieras. Recuerda que el tiempo es lo mas importante que tenemos.
         </p>
        </div>
        <!-- Consejo 2 -->
        <div class="consejo2">
            <p>Lo importante es entender los conceptos y su funcionamiento, intentar memorizar toda la informacion posible de un dia para otro no hara mas que confundirte. ve a tu propio ritmo </p>
          
            <img src="imagenes/ritmo.png" alt="">
          </div>
        </div>
        <!-- consejo 2 -->
       </div>
      </div>
      <div class="piePag">
        <ul>
          <li><a href="#">¿Quienes somos?</a></li>
          <li><a href="#">Contactanos</a></li>
          <li><a href="#">Noticias</a></li>
          <li><a href="#">Saber mas</a></li>
        </ul> 
        <ul>
          <li><a href="#">Otras paginas</a></li>
          <li><a href="#">Oracle</a></li>
          <li><a href="#">Creador</a></li>
        </ul>
        <div class="piePag-ytb">
          <h1>Java y otros</h1>
          <a href="#"><h1>Encuentranos en </h1><img src="imagenes/logoyt.png" alt=""></a>
        </div>
       </div>
      </div>
    </div>
  </body>
</html>
