<?php
$r1=$_POST['switch'];
$r2=$_POST['instruccion'];
$r3=$_POST['defecto'];
session_start();
$conexion=mysqli_connect("localhost","root","","java");
      $usuario1 = $_SESSION["usuario"];
      $_SESSION['switch']=$r1;
      $_SESSION['instruccion']=$r2;
      $_SESSION['defecto']=$r3;
      echo $r1;
      $puntaje = 0;
      $consulta4 = "SELECT respuesta From respuestas Where idTema = '2'";//respuestas
      $consulta2 = "SELECT idAlumno From alumnos Where Correo = '$usuario1'";//IDAlumno
      $resultado2=mysqli_query($conexion,$consulta2);
      if($resultado2){
        while($row = $resultado2->fetch_array()){
            $numero = $row['idAlumno'];
        }
      }
      $resultado4=mysqli_query($conexion,$consulta4);
      $respuestasAr = array();
      $i=0;
      if($resultado4){
        while($row1 = $resultado4->fetch_array()){
            $respuestasAr[$i] = $row1['respuesta'];
            $i=$i+1;
        }
      }
      if($r1==$respuestasAr[0]){
        $puntaje = $puntaje+1;
      }
      if($r2==$respuestasAr[1]){
        $puntaje = $puntaje+1;
      }
      if($r3==$respuestasAr[2]){
        $puntaje = $puntaje+1;
      }
      if($puntaje==1){
        $insercion1 = "UPDATE calificaciones SET Puntajes = '25' WHERE fkTema = '2' and fkAlumno='$numero'";
        $resultado6=mysqli_query($conexion,$insercion1);
       
        header("location:switch.php");
      }else if($puntaje==2){
        $insercion1 = "UPDATE calificaciones SET Puntajes = '75' WHERE fkTema = '2' and fkAlumno='$numero'";
        $resultado6=mysqli_query($conexion,$insercion1);
        header("location:switch.php");
      }else if($puntaje==3){
        $insercion1 = "UPDATE calificaciones SET Puntajes = '100' WHERE fkTema = '2' and fkAlumno='$numero'";
        $resultado6=mysqli_query($conexion,$insercion1);
        header("location:switch.php");
      }else{
        header("location:switch.php");
      }
      mysqli_free_result($resultado2);
mysqli_close($conexion);
?>