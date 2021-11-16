<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosLogin.css">
    <title>Accede a nuestro contenido</title>
</head>
<body>
    <div class="contenedor">
        <div class="izquierda">
            <div class="formulario">
               <div class="form-cont">
                   <form action="validacionSistemas.php" method="post">
                <h1>Inicia sesion</h1>
                <label for="username">Correo</label>
                <input placeholder="Ingrese su correo" type="text" name="usuario">
                <label for="password" >Contraseña</label>
                <input placeholder="Ingrese su contraseña" type="password" name="contra">
                <br>
                <input type="submit" value="Entrar">
                <a href="Registro1.php">¿No estas registrado?</a>
                </form>
               </div>
            </div>
        </div>
        
    </div>
</body>
</html>