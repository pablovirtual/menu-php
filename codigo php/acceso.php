<?php

// inicio de sesion
session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <title>Bienvenidad (a)</title>
</head>
<body> 

<!--Barra de navegacion-->
    <nav class="navbar">
        <h1>menu</h1>
        <label for="text">PHP</label>
        <input id="text" class="checkbox" type="checkbox">
        <i class="icons fi fi-br-menu-burger"></i>
        <i class="icons fi fi-br-cross"></i>
<!--vinculos-->
        <ul class="menu">
            <li><a href="documento.php">Sube tus documentos</a></li>
            <li><a href="gestionDocumentos.php">Ver archivos</a></li>
            <li><a href="generarFormato.php">Generar reporte</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>

        </ul>
    </nav>
    <br>
<!--imagenes-->
    <div class="imagenes">
        
        <img src="..//img/vitual.jpeg" alt="">
    
    </div>

</body>
</html>
