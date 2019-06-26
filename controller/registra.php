<?php 
session_start();
include("conexion.php");
$conexion = connectDB();
$nombre = $_POST['nombre'];
$categoria = $_POST['idcat'];
$puntaje = $_POST['puntaje'];
$pre = $conexion->prepare("INSERT INTO persona(nombre, puntaje, idcategoria) VALUES (?, ?, ?)");
$pre->bind_param("sii", $nombre, $puntaje, $categoria);
$pre->execute();

echo 1;
?>