<?php
require_once  '../conexion/conexion.php';

class libro {

    function obtenerLibroModelo(){
        $connection = connection();
        $sql = "SELECT * FROM libro";
        $respuesta = $connection->query($sql);
        $pacientes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $pacientes;
    }
    function agregarLibroModelo($nombre, $fecha, $precio){
        $connection = connection();
        $sql = "INSERT INTO libro VALUES('$nombre', '$fecha', $precio)";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    function eliminarLibroModelo($id){
        $connection = connection();
        $sql = "DELETE FROM libro WHERE id='$id'";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    function actualizarLibroModelo($id, $nombre, $fecha, $precio){
        $connection = connection();
        $sql = "UPDATE libro SET nombre = '$nombre', fecha = '$fecha', precio = '$fecha' WHERE id=$id";
        $actualizar = $connection->query($sql);
    }
        

    }




?>  