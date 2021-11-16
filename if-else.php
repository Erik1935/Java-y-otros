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
      $consulta3 = "SELECT Puntajes From calificaciones Where fkAlumno = '$numero' and fkTema='1'";
     
      $resultado3=mysqli_query($conexion,$consulta3);
      
      if($resultado3){
        while($row = $resultado3->fetch_array()){
            $numero1 = $row['Puntajes'];
        }
      }
     
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ifelse.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
    <div class="contenedor">
      <div class="logo">
        <h1>Java y otros </h1>
        <h2>If-else - Java</h2>
        <ul>
          <li><a href="contenidoPagina.php">Inicio</a></li>
          <li><a href="index.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="contenido">
        <div class="derecha">
          <div id="texto" class="tx">
            <!-- <h1 class="titulo">If-Else</h1> -->
            <p class="intro">
              <!-- <img src="imagenes/if.jpg" alt="" /> -->
              if-else, basicamente esta es una estructura de
              desicion ya que lo unico a lo que hace referencia es: "Si o no".<br>
              Si se cumple cierta condición hago esto sino hago lo otro. 
            </p>
            <h2>Estructura</h2>
            <p class="estructura">
              <span class="edicion"><strong>if</strong></span
                >(Condicion a cumplirse){<br />
              Sentencias a ejecutar en caso de que la condicion se cumpla<br />
              <span class="edicion"><strong>else</strong></span
                >{<br />Opcion en caso de que la condicion sea falsa<br />
              Sentencias a ejecutar<br />
              }
            </p>
            <p class="explicacion">
              Esta estructura como tal la utilizamos a diario aunque no lo
              creas, en conversaciones, inclusive al comprar productos.<br />
              Por ejemplo al comprar un producto tu mente razona de la siguiente
              forma:<br />
              Si el articulo X cuesta N precio y tengo la misma cantidad de
              dinero o una cantidad mayor de dinero lo compro, sino busco una
              alternativa o no lo compro
            </p>
          </div>
          <div id="formulario" class="formulario">
            <form action="valido2.php" method="post">
              <!-- Respuesta 1 -->
              <h3>La estructura if-else se puede aplicar en</h3>
              <input type="radio" name="if-else" id="" value="siono" /><label
                >Situaciones en las que la respuesta sea si o no</label
              ><br /><input type="radio" name="if-else" id="" value="i" /><label
                >Leer el horoscopo</label
              ><br />
                  <!-- Respuesta 2 -->
              <h3>Accion que realiza la instruccion else</h3>
              <input type="radio" name="else" id="" value="erro" /><label
                >Lanza un error</label
              ><br />
              <input type="radio" name="else" id="" value="nada" /><label
                >No hace nada</label
              ><br />
              <input type="radio" name="else" id="" value="falso" /><label
                >Realiza una accion en caso de que la condicion sea falsa</label
              ><br />
              <input type="radio" name="else" id="" value="no" /><label
                >Manda a imprimir "No" en pantalla</label
              ><br />
                  <!-- Respuesta 3 -->
              <h3>
                Selecciona el resultado que imprimira el siguiente codigo<br />
                if(<span>1</span>><span>0</span>){<br />System.out.println("Uno es mayor a <span>0</span>");<br />}
              </h3>
              <input type="radio" name="c" id="" value="imprimir" /><label
                >Mandara a imprimir Uno es mayor a 0</label
              ><br /><input type="radio" name="c" id="" value="else" /><label
                >Ejecutara el else</label
              ><br />
              <input type="radio" name="c" id="" value="nada" /><label
                >No hara nada</label
              ><br />
              <input class="btn" type="submit" value="Aceptar" />
            </form>
          </div>
          
          <ul class="paginas">
            <li><a href="if-else.php">1</a></li>
            <li><a href="switch.php">2</a></li>
            <li><a href="while.php">3</a></li>
          </ul>
        </div>
        <div class="izquierda">
          <div class="idea1">
            <h3>Sabias que..</h3>
            
            <p>
              <img src="imagenes/idea.jpg" alt="" />
              Existe otra estructura parecida al if else, a esta se le conoce
              como operador ternario.
            </p>
          </div>
          <div class="idea2">
            <h3>Es recomendable que...</h3>
            <p>
              Durante tu proceso de aprendizaje consultes la información sobre
              el mismo tema en diversos medios, ya sea videos, libros y páginas
              web, ya que podrás encontrar desde información más amplia hasta
              explicaciones más claras.
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
