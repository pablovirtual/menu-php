<?php

$usuarios = array();

if(file_exists('usuarios.json')){
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Generar reportes</title>
</head>
<body>

<div class="enlace">
<a href="acceso.php">menu</a>
</div>

    <div class="formulario">
        <h1>Generar reportes</h1><br>
        <form action="reporte.php" method="POST">
            <label for="tipo">Tipo de reporte</label>
            <select name="tipo" id="tipo">
                <option value="pdf">PDF</option>
                <option value="excel">Excel</option>
                <option value="word">Word</option>
                <option value="imagen">Generar imagen</option>
            </select><br><br>
            <button type="submit" value="submit">Generar</button>
        </form>
    </div>
    
</body>
</html>