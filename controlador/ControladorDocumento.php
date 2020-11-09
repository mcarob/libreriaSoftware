<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/daos/DocumentoDAO.php');

class ControladorDocumento{

    private $documento;


    public function agregarRegistro(Documento $nuevoRegistro)
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Documento $registroActualizar)
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listar();
    }

}

?>