<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosRegistro.css">
    <title>Registrate para acceder</title>
</head>
<body>
    <div class="contenedor">
        <div class="izquierda">
            <div class="formulario">
               <div class="form-cont">
                   <form action="registro.php" method="post">
                <h1>Registrate</h1>
                <label for="email">Email</label>
                <input placeholder="Ingrese su correo" name="correo" type="text">
                <label for="password" >Contraseña</label>
                <input placeholder="Ingrese su contraseña" name="contra" type="password">
                <br>
                <input type="submit" value="Entrar">
                
                </form>
               </div>
            </div>
        </div>

    </div>
</body>
</html>