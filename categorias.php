<?php
session_start();
$_SESSION['indice'] = 1;
$_SESSION['puntaje'] = 0;
$_SESSION['intento'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/descripcion.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container contenedor">
        <h2>Selecciona una categoría</h2>
        <div class="row">
            <div class="col">
                <div id="acentos" onmouseover="visibleAcentos()"  onmouseout="ocultarAcentos()"><button class="cat" onclick="location.href='ejercicioAcentos.php'">á</button></div>
                <h3>Acentos</h3>
            </div>
            <div class="col">
                <div id="puntos" onmouseover="visiblePuntos()"  onmouseout="ocultarPuntos()"><button class="cat">; : . ,</button></div>
                <h3>Puntuación</h3>
            </div>
            <div class="col">
                <div id="mayusculas" onmouseover="visibleMayusculas()"  onmouseout="ocultarMayusculas()"><button class="cat">A</button></div>
                <h3>Mayúsculas</h3>
            </div>
        </div>
        <hr>
        <h3>Descripción de la categoría:</h3>
        <div class="row">
            <div class="col-8" id="colNota">
                <div id="descripcionAcentos">
                    En esta categoría encontrarás actividades relacionadas con el uso de los acentos.
                </div>
                <div id="descripcionPuntos">
                    En esta categoría encontrarás actividades relacionadas con el uso de los signos de puntuación, como lo son el punto, coma, punto y coma, etc.
                </div>
                <div id="descripcionMayusculas">
                    En esta categoría encontrarás actividades relacionadas con el uso correcto de las Mayúsculas.
                </div>
            </div>
            <div class="col-4" id="colImg">
                <img src="img/librin.png" alt="librin" class="img-fluid">
            </div>
        </div>
    </div>
    <br>
    <br>
</body>
</html>
