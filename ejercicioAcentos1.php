<?php 
include('controller/conexion.php');
$conexion = connectDB();
 echo $conexion->host_info . "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Acentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ejercicios.css">
    <link rel="stylesheet" href="css/estiloTeclas.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container contenedor">
        <h1>Selecciona la palabra mal escrita:</h1>
        <div class="keys row">
            <div data-key="65" class="key col cat">
                <kbd>aéreo</kbd>
                <span class="sound">A</span>
            </div>
            <div data-key="66" class="key col cat">
                <kbd>vigía</kbd>
                <span class="sound">B</span>
            </div>
            <div data-key="67" class="key col cat">
                <kbd>acréedor</kbd>
                <span class="sound">C</span>
            </div>
            <div data-key="68" class="key col cat">
                <kbd>aeroplano</kbd>
                <span class="sound">D</span>
            </div>
        </div>
        <audio data-key="65" src="sounds/clap.wav"></audio>
        <audio data-key="66" src="sounds/hihat.wav"></audio>
        <audio data-key="67" src="sounds/kick.wav"></audio>
        <audio data-key="68" src="sounds/openhat.wav"></audio>
        <script>
            function removeTransition(e) {
                if (e.propertyName !== 'transform') return;
                e.target.classList.remove('playing');
            }
            function playSound(e) {
                const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
                const key = document.querySelector(`div[data-key="${e.keyCode}"]`);
                if (!audio) return;

                key.classList.add('playing');
                audio.currentTime = 0;
                audio.play();
            }
            const keys = Array.from(document.querySelectorAll('.key'));
            keys.forEach(key => key.addEventListener('transitionend', removeTransition));
            window.addEventListener('keydown', playSound);
        </script>
        <div class="row">
            <h3>Puntaje</h3>
            <div class="col-4" id="colImg">
                <img src="img/librin.png" alt="librin" class="img-fluid">
            </div>
        </div>
    </div>
    <br>
    <br>
</body>
</html>
