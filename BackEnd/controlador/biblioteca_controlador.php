<?php

require_once '../modelo/biblioteca_modelo.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregar":
        agregarLibro();
    break;
    case "eliminar":
        eliminarLibro();
    break;
    case "obtener":
        obtenerLibro();
    break;
    case "actualizar":
        actualizarLibro();
    break;
}

function obtenerLibro(){
    $resultado = (new libro())->obtenerLibroModelo();
    echo json_encode($resultado);
 }
function agregarLibro(){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->agregarLibroModelo($nombre, $fecha, $precio);   
    echo json_encode($resultado);
}
function eliminarLibro(){
    $id = $_POST['id'];
    $resultado = (new libro())->eliminarLibroModelo($id);
}
function actualizarLibro(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->actualizarLibroModelo($nombre, $fecha, $precio);   
    echo json_encode($resultado);
}