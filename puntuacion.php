<?php
session_start();
include('controller/conexion.php');
$conexion = connectDB();
$puntaje = $_SESSION['puntaje'];
$acentos = $conexion->query("SET NAMES 'utf-8'");
$idCat = $_SESSION['categoria'];
$getCatNom = $conexion->query("SELECT nombre from categoria WHERE idcategoria = $idCat");
$nombreCat = $getCatNom->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Puntaje</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/puntaje.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container contenedor">
        <div class="row">
            <div class="col-4">
                <h2>Tu puntuación final es:</h2>
                <h2><?php echo $puntaje?></h2>
                
                    <div class="form-group">
                    <label for="nombreJugador">Escribe tu nombre:</label>
                    <input type="text" class="form-control" id="nombreJ">
                    </div>
                    <button class="btnPuntaje" onclick="guardarP()">Guardar Puntaje</button>
                    <button class="btnRegresa" onclick="regresar()">Volver a Jugar</button>
                <img src="img/librin.png" alt="librin" class="img-fluid">
            </div>
            <div class="col-8">
                <h2>Tabla de puntaje - Categoria: <?php echo $nombreCat['nombre']?></h2>
                <table class="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Puntaje</th>
                    </tr>
                </thead>
                <?php 
                    $getTabla = $conexion->query("SELECT * FROM persona WHERE idcategoria = $idCat ORDER BY puntaje DESC");
                    if ($getTabla->num_rows > 0) {
                        while ($row = $getTabla->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row['nombre']."</td>";
                            echo "<td>".$row['puntaje']."</td>";
                            echo "</tr>";
                        }
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    function guardarP(){
        var nom = document.getElementById("nombreJ").value;
        var id = "<?php echo $idCat?>"
        var pun = "<?php echo $puntaje?>"
        console.log(nom);
        var data = {
            nombre: nom,
            idcat: id,
            puntaje: pun
        }
        $.ajax({
            type: "POST",
            url: "controller/registra.php",
            data: data
        }).done(function( data, textStatus, jqXHR ) {
                    if ( console && console.log ) {
                        console.log( "La solicitud se ha completado correctamente.");
                        if (data == 1) {
                            location.href = 'puntuacion.php';
                        }
                    }
                });
    }
    function regresar() {
        location.href="categorias.php";
    }
</script>
</html>