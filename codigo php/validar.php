<?php
session_start();

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
    <div class="enlace">
        <a href="acceso.php" >Ingreso al Portal</a>
    </div>

<div class="bienvenida">
        <?php
                    //inicia array de usuarios
                    $usuarios = array ();
                    //agraga un nuevo usuario al array
                    $usuario = $_POST['usuario'];
                    $password = $_POST['password'];
                    $usuarios [] = array('usuario' => $usuario, 'password' => $password);
                    echo "Bienvenido (a) $usuario, tu usuario ha sido creado exitosamente !";
        
        ?>
</div>

</body>
</html>