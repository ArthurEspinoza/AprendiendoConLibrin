<?php
    function connectDB(){

        $server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "librinbd";
    
    
        $mysqli = new mysqli($server, $user, $pass, $bd);
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $mysqli -> set_charset('utf8');
        return $mysqli;
    } 
?>