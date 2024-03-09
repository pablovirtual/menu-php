<?php

// inicio de sesion
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Subir Documentos</title>
</head>
<body>
<div class="enlace">
<a href="acceso.php">menu</a>
</div>

<!--formulario-->
<div class="formulario">
    <h1>Sube tu Documentos</h1>

    <form action="gestionDocumentos.php" method="POST"  enctype="multipart/form-data"  id="form1">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
            <!--archivo-->
            <input type="file" name="archivo" id="archivo" required>
            <!--boton-->
            <button type="submit" id="form1" value="Enviar">Enviar</button>
    </form>
</div>

    
</body>
</html>