<?php
include 'config/conexion.php';

$id = $_POST['id'];
$aula = $_POST['aula'];
$estado = $_POST['estado'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$observaciones = $_POST['observaciones'];

// Actualiza el registro
$sql = "UPDATE aulas SET aula='$aula', estado='$estado', fecha='$fecha', hora='$hora', observaciones='$observaciones' WHERE id=$id";
$conexion->query($sql);

header("Location: aulas.php");
?>
