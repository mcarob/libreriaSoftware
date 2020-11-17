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


    public function listarDocumentoF()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listarDocumentoFisico();
    }

    public function listarDocumentoD()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listarDocumentoDigital();
    }

    // // // // 
    public function listarLibrosFisicos()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->informacionLibrosFisicos();
    }
    public function listarLibrosDigitales()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->informacionLibrosDigitales();
    }
    public function listarPonencias()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->informacionPonencia();
    }
    public function listarArticulos()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->informacionArticulos();
    }
    // // // 
}

?>