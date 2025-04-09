<?php
require_once 'config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];
    $password = $_POST['password'];
   

    if (!empty($nombre) && !empty($email) && !empty($rol) && !empty($password)) {
        $passEncriptada = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios(nombre,email,rol,password) VALUES('$nombre','$email','$rol','$passEncriptada')";
        $rst = mysqli_query($conexion, $sql);

        if ($rst) {
            $resultado = "Registro exitoso";
        } else {
            $resultado = "Error al registrar";
        }
    } else {
        $resultado = "Los campos no pueden quedar vacios";
    }

    header('Location: registroUsuario.php?var='.$resultado);
    exit();
}
