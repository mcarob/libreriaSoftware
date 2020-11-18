<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/daos/DocumentoDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/daos/DaoPrestamoFisico.php');

class ControladorDocumento{

    private $documento;


    public function agregarRegistro(Documento $nuevoRegistro)
    {
        echo("linea13");
        print_r($nuevoRegistro);
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


    public function darDocumentoFF($id)
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->darDocumentoFisico($id);
    }


    public function darDocumentoDD($id)
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->darDocumentoDigital($id);
    }
    // // // // 

    public function informacionDocumentos()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->informacionDocumentos();
    }


    public function materias()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->materias();
    }

    public function idiomas(){
        $this->documento=new DocumentoDAO();
        return $this->documento->idiomas();
    }

    // // // 
}

?>