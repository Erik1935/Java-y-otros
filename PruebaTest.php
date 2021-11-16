<?php
class PruebaTest extends PHPUnit\Framework\TestCase
{
    public function testConexion()
    {
        $conexion=mysqli_connect("localhost","root","","java");
        $consulta="SELECT Correo FROM Alumnos WHERE Correo ='$usuario' and Contrasena='$contra'";
        $resultado=mysqli_query($conexion,$consulta);
        $filas=mysqli_num_rows($resultado);
    }
    public function testdatos(){
        $conexion=mysqli_connect("localhost","root","","java");
      $consulta2 = "SELECT idAlumno From alumnos Where Correo = 'correo123@gmail.com'";
      $resultado2=mysqli_query($conexion,$consulta2);
      if($resultado2){
        while($row = $resultado2->fetch_array()){
            $numero = $row['idAlumno'];
        }
        echo $numero;
      }
    }
    public function testpuntaje(){
        $conexion=mysqli_connect("localhost","root","","java");
        $consulta3 = "SELECT Puntajes From calificaciones Where fkAlumno = '20' and fkTema='1'";
        $resultado3=mysqli_query($conexion,$consulta3); 
        if($resultado3){
          while($row = $resultado3->fetch_array()){
              $numero1 = $row['Puntajes'];
          }
          echo $numero1;
        }
    }
    public function insercion(){
      $conexion=mysqli_connect("localhost","root","","java");
$consulta="INSERT INTO alumnos (idAlumno, Correo, Contrasena) VALUES ('','correo123@gmail.com', '123456')";
$consulta2 = "SELECT idAlumno From alumnos Where Correo = '$usuario1'";
$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion,$consulta2);
$numero = 0;
if($resultado>0 && $resultado2){
while($row = $resultado2->fetch_array()){
    $numero = $row['idAlumno'];
}
$consulta3="INSERT INTO calificaciones (idCalificacion, Puntajes, fkTema,fkAlumno) VALUES ('','0','1', '20'),
('','0','2', '$numero'),('','0','3', '$numero')";
$resultado3=mysqli_query($conexion,$consulta3);
echo "Exito";
}else{
  echo "Fallo";
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
    }
    public function log (){
      header("location:login.php");
    }

}

