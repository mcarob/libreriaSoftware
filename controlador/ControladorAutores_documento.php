<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/daos/Autores_documentoDAO.php');



class ControladorAutores_documento{

    private $autores_documento;


    public function agregarRegistro(Autores_documento $nuevoRegistro)
    {
        $this->autores_documento=new Autores_documentoDAO();
        return $this->autores_documento->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Autores_documento $registroActualizar)
    {
        $this->autores_documento=new Autores_documentoDAO();
        return $this->autores_documento->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->autores_documento=new Autores_documentoDAO();
        return $this->autores_documento->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->autores_documento=new Autores_documentoDAO();
        return $this->autores_documento->listar();
    }

}

?>