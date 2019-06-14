<?php 
session_start();
include('conexion.php');
$conexion = connectDB();
$res = $_POST['respuesta'];
$id = $_POST['index'];

$sqlCorrecto = "SELECT correcta FROM actividad WHERE idActividad = $id";
$resultado = $conexion->query($sqlCorrecto);
$correcto = $resultado->fetch_assoc();
$bandera;
if ($correcto['correcta'] == $res) {
    $bandera = 1;
}else{
    $bandera = 0;
}
//echo $res." ".$bandera;
echo $bandera;
?>