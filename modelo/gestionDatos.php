<?php error_reporting (0);?>

<?php

require 'conexion.php';

class servicioDatos extends Conexion {

    public function __construct() {
        parent::__construct();
    }

    public function obtenerUsuarios() {

        $consulta= $this->conexion->query('select * from usuario');
        $resultado= $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function crearUsuario($codigo, $nombre, $correo, $contrasena){

        $sql = "insert into usuario (codigo, nombre, correo, contrasena) values ('".$codigo."','".$nombre."','".$correo."','".$contrasena."')";
        $resultado = $this->conexion->query($sql);
        if ($resultado){
            $this->conexion->close();
            return true;
        }else {
            $this->conexion->close();
            return false;
        }
    }

    public function validarCodigo($codigo){

        
        $consulta= $this->conexion->query("select * from usuario where codigo='".$codigo."'");
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function consultarUsuario($codigo) {
        $consulta=$this->conexion->query("select * from usuario where codigo = '".$codigo."'");
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function actualizarUsuario($codigo, $nombre, $correo, $contrasena){
        $sql = "update usuario set nombre = '".$nombre."', correo = '".$correo."', contrasena = '".$contrasena."' where codigo = '".$codigo."' ";

        $resultado = $this->conexion->query($sql);
        if ($resultado){
            $this->conexion->close();
            return true;
        }else {
            $this->conexion->close();
            return false;
        }
    }

    public function borrarUsuario($codigo){
        $sql = "delete from usuario where codigo = '".$codigo."' ";

        $resultado = $this->conexion->query($sql);
        if ($resultado){
            $this->conexion->close();
            return true;
        }else {
            $this->conexion->close();
            return false;
        }
    }
}

?>