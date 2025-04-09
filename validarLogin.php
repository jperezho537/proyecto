<?php
session_start();
require_once 'config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id_usuario, rol, password FROM usuarios WHERE email = '$email'";
    $rst = mysqli_query($conexion, $sql);

    if ($rst && mysqli_num_rows($rst) > 0) {
        $fila = mysqli_fetch_assoc($rst);
        $passwordHas = $fila['password'];

        if (password_verify($password, $passwordHas)) {
            $_SESSION['usuario_id'] = $fila['id_usuario'];
            $_SESSION['usuario_rol'] = $fila['rol'];
            $_SESSION['usuario_nombre'] = $fila['nombre'];
            if ($fila['rol'] === "Administrador") {
                header('Location:aulas.php');
                exit();
            }
            
            else if($fila['rol'] === 'Instructor'){
                header('Location:panelAdministrativo.php');
                exit();
            }
            
            else if($fila['rol']==='Estudiante'){
                header('Location:paginaprueba.html');
                exit();
            }           
                else {
                header('Location:index.php?error=Acceso no autorizado');
                exit();
            }
        } else {
            header("Location:index.php?error=Correo o contraseña incorrectos");
            exit();
        }
    } else {
        header('Location:index.php?error=Correo o contraseña incorrectos');
        exit();
    }
}
