<?php
include 'config/conexion.php';

// Recibe los datos del formulario
$aula = $_POST['aula'];
$estado = $_POST['estado'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$observaciones = $_POST['observaciones'];

// Inserta en la base de datos
$sql = "INSERT INTO aulas (aula, estado, fecha, hora, observaciones) VALUES ('$aula', '$estado', '$fecha', '$hora', '$observaciones')";
$conexion->query($sql);

// Redirige al inicio
header("Location: aulas.php");
?>