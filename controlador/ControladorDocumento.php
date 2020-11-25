<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DocumentoDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DaoPrestamoFisico.php');

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
    public function listarLibro()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listarLibro();
    }

    public function listarArticulo()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listarArticulo();
    }


    public function listarPonencia()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listarPonencia();
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

    public function cantidadLibro($codigoCliente)
    {
        $this->libro=new ClienteDAO();
        return $this->cliente->cantidadLibros($codigoCliente);
    }
    public function graficoFisicovDigital()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->graficoDvsF();
    }

    public function listarDocumentoNoValidados()
    {
        $this->documento=new DocumentoDAO();
        return $this->documento->listarDocumentoFisicoNoValidado();
    }

    public function aceptarLibro($cod){
        $this->documento=new DocumentoDAO();
        return $this->documento->AceptarLibroNuevo($cod);
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

    public function filtradosInicio($idioma,$documento,$presentacion){
        $this->documento=new DocumentoDAO();
        return $this->documento->filtradosInicio($idioma,$documento,$presentacion);
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

    public function tipoDoc(){
        $this->documento=new DocumentoDAO();
        return $this->documento->tipoDoc();
    }

    public function tipoPres(){
        $this->documento=new DocumentoDAO();
        return $this->documento->tipoPres();
    }

    public function darInfoXdoc($documento){
        $this->documento=new DocumentoDAO();
        return $this->documento->darInfoXdoc($documento);
    }

    public function buscarExistenciaXdocumento($documento){
        $this->documento=new DocumentoDAO();
        return $this->documento->buscarExistenciaXdocumento($documento);
    }
    
    
    // // // 
}

?>