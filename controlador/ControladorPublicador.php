<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DaoPublicador.php');

class ControladorPublicador{

    private $Publicador;


    public function agregarRegistroPlataforma(Publicador $nuevoRegistro, $contrasenia)
    {
        $this->Publicador=new DaoPublicador();
        return $this->Publicador->agregarRegistroPlataforma($nuevoRegistro,$contrasenia);
    }

    public function agregarRegistro(Publicador $nuevoRegistro)
    {
        $this->Publicador=new DaoPublicador();
        return $this->Publicador->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Publicador $registroActualizar)
    {
        $this->Publicador=new DaoPublicador();
        return $this->Publicador->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->Publicador=new DaoPublicador();
        return $this->Publicador->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->Publicador=new DaoPublicador();
        return $this->Publicador->listar();
    }

    public function PublicadoresSinValidar()
    {
        $this->Publicador=new DaoPublicador();
        return $this->Publicador->listarPublicadoresSinValidar();
    }

   

}

?>