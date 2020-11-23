<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/daos/DaoPrestamoFisico.php');

class ControladorPeticionDigital{

    private $peticion;


    public function agregarRegistro(Peticion_digital $nuevoRegistro)
    {
        $this->peticion=new DaoPeticionDigital();
        return $this->peticion->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Peticion_digital $registroActualizar)
    {
        $this->peticion=new DaoPeticionDigital();
        return $this->peticion->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->peticion=new DaoPeticionDigital();
        return $this->peticion->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->peticion=new DaoPeticionDigital();
        return $this->peticion->listar();
    }


    
}