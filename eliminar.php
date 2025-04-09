<?php
include 'config/conexion.php';

$id = $_GET['id'];
$conexion->query("DELETE FROM aulas WHERE id = $id");

header("Location: aulas.php");
?>
