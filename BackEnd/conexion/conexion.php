<?php

function connection () {
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "biblioteca";
    $puerto = 3306;     //puerto predeterminado
    $mysqli = new mysqli ($host, $usuario, $password, $bd, $puerto);
    return $mysqli;
}


?>