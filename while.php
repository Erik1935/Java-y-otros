<?php 
    // $usuario1 = $_GET['usu'];
    session_start();
      $usuario1 = $_SESSION["usuario"];
      $conexion=mysqli_connect("localhost","root","","java");
      $consulta2 = "SELECT idAlumno From alumnos Where Correo = '$usuario1'";
      $resultado2=mysqli_query($conexion,$consulta2);
      if($resultado2){
        while($row = $resultado2->fetch_array()){
            $numero = $row['idAlumno'];
        }
      }
      $consulta3 = "SELECT Puntajes From calificaciones Where fkAlumno = '$numero' and fkTema='3'";
     
      $resultado3=mysqli_query($conexion,$consulta3);
      
      if($resultado3){
        while($row = $resultado3->fetch_array()){
            $numero1 = $row['Puntajes'];
        }
      }
     
      ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="while.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>While - Java</title>
  </head>
  <body>
    <div class="contenedor">
      <div class="logo">
        <h1>Java y otros </h1>
        <h2>While y Do-While</h2>
        <ul>
          <li><a href="contenidoPagina.php">Inicio</a></li>
          <li><a href="index.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="contenedor-contenido">
        <div class="derecha">
          <div class="while">
            <p class="texto">
              Un while no es más que una estructura que te permite iterar a
              través de un ciclo el cual puede ser finito pero en otras puede
              ser infinito, solo si cometes algún error con respecto a la
              lógica. Este ciclo finalizara hasta que la condición sea falsa de
              lo contraria seguirá ejecutándose.<br />
              Un Do-While no es más que un while pero con la diferencia de que
              este iterara como mínimo una vez, independientemente de que la
              condicion sea verdadera o falsa.
            </p>
            <h3>Estructura</h3>
            <p class="sintaxis">
              <span class="edicion"><strong>while</strong></span
                >(condicion){<br />
              //Sentencias a ejecutar si la condicion es verdadera<br />
              }<br />
              <span class="edicion"><strong>do</strong></span
                >{<br />
              //Sentencias a ejecutar como minimo una vez<br />
              } <span class="edicion"><strong>while</strong></span
                >(condicion);<br />
            </p>
          </div>
          <form action="valido.php" method="post">
            <h3>
              Si la condición dentro de la instrucción while siempre es
              verdadera, <span>¿</span>Qué es mas probable que ocurra?
            </h3>
            <input type="radio" name="while" value="infinito" /><label
              >Un bucle infinito</label
            ><br />
            <input type="radio" name="while" value="unavez" /><label
              >Un ciclo que solo itera una vez</label
            ><br />
            <input type="radio" name="while" value="fin" /><label
              >El bucle finaliza automaticamente</label
            ><br />
            <h3>
              Se ejecuta como minimo una vez, sin importar si la condición es
              verdadera o falsa
            </h3>
            <input type="radio" name="doywhile" id="" value="else" /><label
              >else</label
            ><br />
            <input type="radio" name="doywhile" id="" value="if" /><label
              >if</label
            ><br />
            <input type="radio" name="doywhile" id="" value="while" /><label
              >while</label
            ><br />
            <input type="radio" name="doywhile" id="" value="dowhile" /><label
              >do while</label
            ><br />
            <h3>Evalua la condicion antes de comenzar a iterar</h3>
            <input type="radio" name="iterar" id="" value="while" /><label
              >while</label
            ><br />
            <input type="radio" name="iterar" id="" value="dowhile" /><label
              >do-while</label
            ><br />
            <input type="radio" name="iterar" id="" value="return" /><label
              >return</label
            ><br />
            <input class="btn" type="submit" value="Aceptar" />
          </form>
         
          <ul class="paginas">
            <li><a href="if-else.php">1</a></li>
            <li><a href="switch.php">2</a></li>
          </ul>
        </div>
        <div class="izquierda">
          <div class="idea1">
            <h3>Sabias que...</h3>
            <p>
              Cuando ocurre un ciclo infinito dentro de un while pueden ocurrir
              dos cosas: la primera es que el ciclo se mantendrá repitiéndose
              infinitamente hasta que el usuario detenga abruptamente el
              programa o este finalizará lanzando la excepción stack overflow
              dependiendo los datos que se estén manejando en él.
            </p>
          </div>
          <div class="idea2">
            <h3>Stack Overflow</h3>
            <p>
              <img src="imagenes/stack-overflow.png" alt="" />
              Es una excepción en Java y un foro web cuyo contenido principal
              son los temas de programación.
            </p>
          </div>
          <div>
              <h2>Tu progreso en este tema es:</h2>
              <p id="Progreso"><?php echo $numero1?>% Completado</p>
          </div>
        </div>
      </div>
      <footer class="piePag">
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
      </footer>
    </div>
     
    
  </body>
</html>
