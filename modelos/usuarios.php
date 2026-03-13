<?php
include_once("connection.php");

class Usuarios{
    /* atributos */
    private $idusuarios;
    private $nombres;
    private $apellidos;
    private $cedula;
    private $usuario;
    private $password;

    private $con;

    /* metodos */
    public function __construct(){
        $this->con = new Conexion();
    } // Fin del constructor

    public function listar(){
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($sql);
        /* var_dumb($resultado); */
        return $resultado;
    }

    public function set($atributo, $valor) {
        $this->$atributo=$valor;
    }

    public function crear() {

        $sql2= "SELECT * FROM usuarios WHERE cedula='$this->cedula'";
        $resultado=$this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);

        if ($filas==0) {
            $sql="INSERT INTO usuarios (nombres, apellidos, cedula, usuario, password)
            VALUES('$this->nombres', '$this->apellidos', '$this->cedula', '$this->usuario', '$this->password')";
            $this->con->consultaSimple($sql);
            return true;
        } else {
            return false;
        }
    }

    public function consultar() {

        $sql="SELECT * FROM usuarios WHERE idusuarios='$this->idusuarios'";
        // echo $sql;
        $resultado=$this->con->consultaRetorno($sql);
        $registro=mysqli_fetch_assoc($resultado);

        // $this->idusuarios=$registro["idusuarios"];
        // $this->nombres=$registro["nombres"];
        // $this->apellidos=$registro["apellidos"];
        // $this->cedula=$registro["cedula"];
        // $this->usuario=$registro["usuario"];
        // $this->password=$registro["password"];

        return $registro;

    }

    public function eliminar() {

        $sql="DELETE FROM usuarios WHERE idusuarios='$this->idusuarios'";
        // echo $sql;
        $resultado=$this->con->consultaSimple($sql);
        // $registro=mysqli_fetch_assoc($resultado);
        // echo "Usuario eliminado exitosamente";

    }

    public function editar () {

        $sql="UPDATE usuarios SET nombres='$this->nombres', apellidos='$this->apellidos',
        cedula='$this->cedula', usuario='$this->usuario', password='$this->password' WHERE idusuarios='$this->idusuarios'";
        $this->con->consultaSimple($sql);

        return true;
    }


}// Fin de la clase usuarios

$miUsuario = new Usuarios();
$miUsuario->listar();
?>