<?php
class Database{
    private $con;
    private $dbhost="localhost";
    private $dbuser="cesar";
    private $dbpass="Conchita";
    private $dbname="compartiralimentos";
    function __construct() {
        $this->connect_db();
    }
    public function connect_db() {
        $this->con = mysqli_connect($this->dbhost, 
        $this->dbuser, 
        $this->dbpass, 
        $this->dbname);
        if(mysqli_connect_error()) {
            die("Conexión a la base de datos falló " .
            mysqli_connect_error().mysqli_connect_errno());
        }
    }
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
    }

    public function leerUsuarios() {
        $sql = "SELECT * FROM Usuario";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function crearUsuario($nombre, $contra, $tel, $email, $notas){
        $sql = "INSERT INTO usuario (Nombre, Contrasenia, Telefono, Correoelectronico, Notas) VALUES
                ('$nombre', '$contra', '$tel', '$email', '$notas')";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }
        return false;
    }
    public function actualizarUsuario($id, $nombre, $contra, $tel, $email, $notas){
        $sql = "UPDATE usuario Set Nombre='$nombre', Contrasenia='$contra', Telefono='$tel', CorreoElectronico='$email', Notas='$notas' WHERE id=$id";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }
        return false;
    }
    public function registroUsuario($id){
        $sql = "SELECT * FROM usuario where id='$id'";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res);
        return $return ;
    }
    public function eliminarUsuario($id){
        $sql = "DELETE FROM usuario WHERE id=$id";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }
        return false;
    }
}
?>