<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validacion de usuario</title>
</head>
<body>
<!--Formulario de usuario-->   
<div class="formulario" >
        <h1>CREA TU USUARIO</h1><br>
        <form action="validar.php" method="POST" id="form1">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" id="form1" value="Ingresar">ingresar</button>
        </form>
</div>    

</body>
</html>