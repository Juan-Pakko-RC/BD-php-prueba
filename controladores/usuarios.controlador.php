<?php
include_once("modelos/usuarios.modelo.php");

class ControladorUsuarios{
    private $usuario;

    public function __construct() {
        $this->usuario = new ModeloUsuarios();
    }

    public function ctrListar() {
        $listar = $this->usuario->mdlListar();
        return $listar;
    }

    public function ctrCrear($cedula, $nombres, $apellidos, $usuario, $password) {
        $this->usuario->mdlSet("cedula", $cedula);
        $this->usuario->mdlSet("nombres", $nombres);
        $this->usuario->mdlSet("apellidos", $apellidos);
        $this->usuario->mdlSet("usuario", $usuario);
        $this->usuario->mdlSet("password", $password);

        $resultado=$this->usuario->mdlCrear();
        return $resultado;
    }

    public function ctrConsultar($id) {

        $this->usuario->mdlSet("idusuarios", $id);

        return $this->usuario->mdlConsultar();
    }

    public function ctrEliminar($id) {

        $this->usuario->mdlSet("idusuarios", $id);

        return $this->usuario->mdlEliminar();
    }

    public function ctrEditar($idusuarios, $nombres, $apellidos, $cedula, $usuario, $password) {

        $this->usuario->mdlSet("idusuarios", $idusuarios);
        $this->usuario->mdlSet("nombres", $nombres);
        $this->usuario->mdlSet("apellidos", $apellidos);
        $this->usuario->mdlSet("cedula", $cedula);
        $this->usuario->mdlSet("usuario", $usuario);
        $this->usuario->mdlSet("password", $password);

        $resultado=$this->usuario->mdlEditar();
        return $resultado;
    }

}

?>