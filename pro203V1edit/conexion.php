<?php 
    $mysqli = new mysqli("localhost","root","","sistema");

    if($mysqli->connect_error){
       die("Error en la conexión: " . $mysqli->connect_error);
    }
?>