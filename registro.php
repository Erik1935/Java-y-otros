<?php
$usuario1=$_POST['correo'];
$contra=$_POST['contra'];
session_start();
$_SESSION['correo']=$usuario1;
$_SESSION['contra']=$contra;
$conexion=mysqli_connect("localhost","root","","java");
$consulta="INSERT INTO alumnos (idAlumno, Correo, Contrasena) VALUES ('','$usuario1', '$contra')";
$consulta2 = "SELECT idAlumno From alumnos Where Correo = '$usuario1'";
$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion,$consulta2);
$numero = 0;
if($resultado>0 && $resultado2){
while($row = $resultado2->fetch_array()){
    $numero = $row['idAlumno'];
}
$consulta3="INSERT INTO calificaciones (idCalificacion, Puntajes, fkTema,fkAlumno) VALUES ('','0','1', '$numero'),
('','0','2', '$numero'),('','0','3', '$numero')";
$resultado3=mysqli_query($conexion,$consulta3);
header("location:login.php");
}else{
    include("registro.php");
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
