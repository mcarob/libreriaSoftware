<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/daos/DaoPrestamoFisico.php');

class ControladorPrestamoFisico{

    private $PrestamoFisico;


    public function agregarRegistro(PrestamoFisico $nuevoRegistro)
    {
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(PrestamoFisico $registroActualizar)
    {
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->listar();
    }

    public function aceptarDevolucion($idCodPrestamo){

        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->aceptarDevo($idCodPrestamo);
    }    

    public function agregarPrestamoProce($cod_libro, $correo){
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->nuevoprestamoProce($cod_libro, $correo);
    }

    public function prestamosFisicosxCodCliente($cod_cliente){
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->prestamosFisicosxCodCliente($cod_cliente);
    }

    public function DarprestamosFisicosxCodPrestamo($cod){
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->darPrestamoFisicoxCod($cod);
    }

    public function cambiarEstadoExistencia($existencia){
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->cambiarEstadoExistencia($existencia);
    }

    public function verRetraso($fecha){
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->verRetraso($fecha);
    }

    public function cambiarEstadoPrestamo($cod){
        $this->PrestamoFisico=new DaoPrestamoFisico();
        return $this->PrestamoFisico->cambiarEstadoPrestamo($cod);
    }

}

?>