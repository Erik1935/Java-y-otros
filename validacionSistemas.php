<?php
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['contra']=$contra;
$conexion=mysqli_connect("localhost","root","","java");
$consulta="SELECT Correo FROM Alumnos WHERE Correo ='$usuario' and Contrasena='$contra'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:contenidoPagina.php");
}else{
    include("login.php");
  
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>