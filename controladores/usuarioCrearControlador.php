<?php

require '../modelo/gestionDatos.php';



if( (isset($_POST['codigo'])) && (!empty($_POST['codigo'])) &&
    (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) &&
    (isset($_POST['correo'])) && (!empty($_POST['correo'])) &&
    (isset($_POST['contrasena'])) && (!empty($_POST['contrasena'])) ) {

        $codigo=$_POST['codigo'];
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];

        $datos = new servicioDatos();
        $validar = $datos->validarCodigo($codigo);

        if(!$validar){

            $insertarUsuario = $datos->crearUsuario($codigo, $nombre, $correo, $contrasena);

                if($insertarUsuario){

                    $listar = new servicioDatos();
                    $listaUsuarios = $listar->obtenerUsuarios();
                    $subVista = "listarUsuarios.php";                    

                    }else{

                        $subVista = "formularioCrearUsuario.php";

                    }

        }else{

            $ErrorCodigo = "El codigo ".$_POST['codigo']." ya existe";
            $subVista = "formularioCrearUsuario.php";
        }   
        

    }else{

       
        $subVista = "formularioCrearUsuario.php";

    }

    $vista = "crud.php";
    require "../vistas/layout.php";

?>