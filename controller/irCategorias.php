<?php 
session_start();
$categoria = $_POST['cat'];
switch ($categoria) {
    case 'acentos':
        $_SESSION['categoria'] = 1;
        echo 1;
        break;
    case 'puntuacion':
        $_SESSION['categoria'] = 2;
        echo 1;
        break;
    case 'mayusculas':
        $_SESSION['categoria'] = 3;
        echo 1;
    default:
        # code...
        break;
}

?>