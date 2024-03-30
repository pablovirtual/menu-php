<?php
session_start();

//se debera de generar un array con los usuarios y contraseñas y almacenarlos en el archivo usuarios.json
//se debera de validar que el usuario y contraseña existan en el archivo usuarios.json

$usuarios = array();

if(file_exists('usuarios.json')){
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
}

if(isset($_POST['usuario']) && isset($_POST['password'])){
    
    $nuevosUsuarios = array(
        'usuario' => $_POST['usuario'],
        'password' => $_POST['password']
    );

    $usuarios [] = $nuevosUsuarios;
    $usuariosJson = json_encode($usuarios, JSON_PRETTY_PRINT);
    file_put_contents('usuarios.json', $usuariosJson);
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