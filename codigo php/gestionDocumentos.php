<?php
/**
 * Este archivo PHP se encarga de gestionar la subida de archivos al servidor.
 * 
 * Inicia una sesión y verifica si la carpeta "Archivos" existe. Si no existe, la crea.
 * Luego, establece los permisos de la carpeta "Archivos" a 0777.
 * 
 * Si se ha seleccionado un archivo para subir, lo mueve a la carpeta "Archivos" y muestra un mensaje de éxito o error.
 */

session_start();

if(!file_exists("./Archivos")){
    if(!mkdir("./Archivos", 0777)){
        echo "Error: No se pudo crear la carpeta de archivos";
        exit;
    }
} 

chmod("./Archivos", 0777);

if(!empty($_FILES["archivo"]["tmp_name"])){
    if(move_uploaded_file($_FILES["archivo"]["tmp_name"], "./Archivos/".$_FILES["archivo"]["name"])){
        echo "El archivo se ha subido correctamente";
    } else {
        echo "Error: No se ha podido subir el archivo";
    } 
}

// Si se envió el formulario de eliminación
if (isset($_POST['delete'])) {
    $file = $_POST['file'];

    // Elimina el archivo
    unlink('./Archivos/' . $file);

    // Recarga la página
    header('Location: ' . $_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<!--enlace menu-->
<div class="enlace">
    <a href="acceso.php">Menu</a>
</div>

<?php
$dir = './Archivos';

// Obtén todos los archivos en el directorio
$files = scandir($dir);

foreach ($files as $file) {
    // Ignora '.' y '..'
    if ($file == '.' || $file == '..') continue;

    // Crea un enlace para visualizar el archivo
    echo '<a href="' . $dir . '/' . $file . '">' . $file . '</a>';

    // Crea un formulario para eliminar el archivo
    echo '<form method="post">';
    echo '<input type="hidden" name="file" value="' . $file . '">';
    echo '<input type="submit" name="delete" value="Eliminar">';
    echo '</form>';
}
?>

</body>
</html>