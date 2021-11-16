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
      $consulta3 = "SELECT Puntajes From calificaciones Where fkAlumno = '$numero' and fkTema='2'";
     
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
    <link rel="stylesheet" href="switch.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Switch - case - Java</title>
  </head>
  <body>
    <div class="contenedor">
      <div class="logo">
        <h1>Java y otros </h1>
        <h2>Switch-Case</h2>
        <ul>
          <li><a href="contenidoPagina.php">Inicio</a></li>
          <li><a href="index.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="contenidos">
        <div class="derecha">
          <div id="switch" class="swt">
            <p class="title">
            La instrucción
              switch-case tiene como funcion el evaluar un valor que recibe,
              para el cual ya tiene una respuesta para cada caso, incluso tiene
              una opción por si ninguna de las anteriores se cumple.
            </p>
            <h3>Estructura</h3>
            <div class="est">
              <div class="contenido-est">
                <span class="edicion"><strong>switch</strong></span
                >(valor){<br />
                <span class="edicion"><strong>case</strong></span>
                valor://Comportamiento que quieres que se cumpla<br />
                //Aquí va lo que hará en caso de que se cumpla la opción<br />
                <span class="edicion"><strong>break;</strong></span
                >//Esta instrucción no es mas que un indicador, en dado caso que
                se cumpla la opción ya no se revisaran las demás<br />
                <span class="edicion"><strong>default:</strong></span
                >//Opción que se cumplirá si no hay ningún case con el valor que
                esperamos<br />
                }<br />
              </div>
            </div>
          </div>
          <form action="valido3.php" method="post">

            <h3>
             <span>¿</span>Cuál de estas opciones no es necesario incluir al utilizar un
              switch-case?
            </h3>
            <input type="radio" name="switch" id="" value="case" /><label
              >Case</label
            ><br />
            <input type="radio" name="switch" id="" value="default" /><label
              >default</label
            ><br />
            <input type="radio" name="switch" id="" value="{ }" /><label
              >{ }</label
            ><br />

            <h3>
              <span>¿</span>Qué ocurrirá si no colocamos el break después de cada
              instruccion?
            </h3>
            <input type="radio" name="instruccion" value="error" /><label
              >Un error</label
            ><br />
            <input type="radio" name="instruccion" value="Nada" /><label
              >Nada</label
            ><br />
            <input type="radio" name="instruccion" value="Normalidad" /><label
              >El programa funcionara con normalidad</label
            ><br />
            <input type="radio" name="instruccion" value="Todo" /><label
              >Realizara todas las operaciones de los case siguientes a la
              opción que haya tomado</label
            ><br />

            <h3><span>¿</span>En qué situaciones se seleccionara la opción default?</h3>
            <input type="radio" name="defecto" value="encontrar" /><label
              >Cuando encuentre coincidencias</label
            ><br />
            <input type="radio" name="defecto" value="termino" /><label
              >Cuando termine el flujo del programa</label
            ><br />
            <input type="radio" name="defecto" value="sincasos" /><label
              >Cuando no encuentre coincidencias</label
            ><br />
            <input type="radio" name="defecto" value="sinllavesr" /><label
              >Cuando no tenga llaves de cierre ni de apertura</label
            ><br />
            <input class="btn" type="submit" value="Aceptar" />
          </form>
        
          <ul class="paginas">
            <li><a href="if-else.php">1</a></li>
            <li><a href="while.php">3</a></li>
          </ul>
        </div>

        <div class="izquierda">
          <div class="idea1">
            <h3>Sabias que...</h3>
            <img src="imagenes/break.png" alt="">
            <p>
              La instrucción break en español significa descanso. El trabajo que
              esta instrucción realiza es el de ignorar las instrucciones que
              haya después de él, en el caso de su trabajo en la instrucción
              switch lo que hace es que ignora las otras opciones que hay debajo
              de el y sale de la instrucción switch y continua a lo que este
              después, en dado caso de que no haya más instrucciones el flujo
              del programa finalizara inmediatamente.
            </p>
          </div>
          <div class="idea2">
            <h3>Otros nombres</h3>
            <img src="imagenes/kotlin.jpg" alt="">
            <p>La instrucción switch en Kotlin recibe el nombre de when.</p>
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
