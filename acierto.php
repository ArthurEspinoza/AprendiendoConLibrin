<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
include('controller/conexion.php');
$conexion = connectDB();
$_SESSION['indice'] = $_SESSION['indice'] + 1;
$numIntentos = $_SESSION['intento'];
switch ($numIntentos) {
    case '0':
        $_SESSION['puntaje'] = $_SESSION['puntaje'] + 100;
        break;
    case '1':
        $_SESSION['puntaje'] = $_SESSION['puntaje'] + 75;
        break;
    case '2':
        $_SESSION['puntaje'] = $_SESSION['puntaje'] + 50;
        break;
    default:
        $_SESSION['puntaje'] = $_SESSION['puntaje'] + 25;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acierto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/acierto.css">
    <script type="text/javascript" src="js/descripcion.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container contenedor">
        <div class="row">
            <div class="col">
                <h1>Correcto</h1>
                <p>Sigue así y alcanza la mayor puntuación</p>
                <button onclick="sigEje()"><img src="img/avanza_ico.png" alt="avanza">Siguiente ejercicio</button>
            </div>
            <div class="col-4">
                <img src="img/librin.png" alt="librin" class="librin">
            </div>
        </div>
    </div>
</body>
<script>
function sigEje(){
    var indice = "<?php echo $_SESSION['indice']?>";
    console.log(indice);
    if (indice > 5) {
        location.href = 'puntuacion.php';  
    } else {
        location.href = 'ejercicioAcentos.php';
    }
    //location.href = 'ejercicioAcentos.php';
}
</script>
</html>