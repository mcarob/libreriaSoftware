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
    
    public function prestamosFisicosxCodCliente($cod_cliente){
        $this->documento=new DaoPrestamoFisico();
        return $this->documento->prestamosFisicosxCodCliente($cod_cliente);
    }

}

?>