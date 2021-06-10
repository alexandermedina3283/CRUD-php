<?php

$id = $_GET['id'];

require('../modelo/gestionDatos.php');
$datos = new servicioDatos();
$usuario = $datos->consultarUsuario($id);

/*echo"<pre>";
echo var_dump($usuario);
echo"</pre>";*/

$vista = "crud.php";
$subVista = "borrarUsuario.php";
require'../vistas/layout.php';
?>