<?php
include_once("modelos/usuarios.php");

class ControladorUsuarios{
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuarios();
    }

    public function listar() {
        $listar = $this->usuario->listar();
        return $listar;
    }

    public function crear($cedula, $nombres, $apellidos, $usuario, $password) {
        $this->usuario->set("cedula", $cedula);
        $this->usuario->set("nombres", $nombres);
        $this->usuario->set("apellidos", $apellidos);
        $this->usuario->set("usuario", $usuario);
        $this->usuario->set("password", $password);

        $resultado=$this->usuario->crear();
        return $resultado;
    }

    public function consultar($id) {

        $this->usuario->set("idusuarios", $id);

        return $this->usuario->consultar();
    }

    public function eliminar($id) {

        $this->usuario->set("idusuarios", $id);

        return $this->usuario->eliminar();
    }

    public function editar($idusuarios, $nombres, $apellidos, $cedula, $usuario, $password) {

        $this->usuario->set("idusuarios", $idusuarios);
        $this->usuario->set("nombres", $nombres);
        $this->usuario->set("apellidos", $apellidos);
        $this->usuario->set("cedula", $cedula);
        $this->usuario->set("usuario", $usuario);
        $this->usuario->set("password", $password);

        $resultado=$this->usuario->editar();
        return $resultado;
    }

}

?>