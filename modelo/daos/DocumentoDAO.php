<?php

include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/Documento.php');

class DocumentoDAO extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(Object $nuevoRegistro){

        $query = "INSERT INTO documento(cod_idioma, cod_tipo_documento, 
        cod_tipo_presentacion, titulo_documento, fecha_publicacion, 
        editorial_publicacion, codigo_isbn, informacion_paginas,
        informacion_congreso, informacion_ssn, informacion_bib, 
        direccion_archivo, cod_publicador, direccion_portada)
        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCod_idioma(), 
                $nuevoRegistro->getCod_tipo_documento(),
                $nuevoRegistro->getCod_tipo_presentacion(), 
                $nuevoRegistro->getTitulo_documento(), 
                $nuevoRegistro->getFecha_publicacion(),
                $nuevoRegistro->getEditorial_publicacion(),
                $nuevoRegistro->getCodigo_isbn(), 
                $nuevoRegistro->getInformacion_paginas(), 
                $nuevoRegistro->getInformacion_congreso(),
                $nuevoRegistro->getInformacion_ssn(), 
                $nuevoRegistro->getInformacion_bib(), 
                $nuevoRegistro->getDireccion_archivo(),
                $nuevoRegistro->getCod_publicador(),
                $nuevoRegistro->getDireccion_portada()
        ]);
        
     
    }

    public function agregarExistencia(Object $nuevoRegistro){

        $lastID = $this->con->prepare("SELECT cod_documento FROM documento ORDER BY cod_documento DESC LIMIT 1 ");
        if($lastID){
            $lastID->execute();
            
            $em = 0;
        while ($fila = $lastID->fetch()) {
                $em = $fila;
                print_r($em);
            }
        }
        
        $query = "INSERT INTO existencia_documento(cod_documento, cod_estado_copia) VALUES (?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->$em[0],
                $nuevoRegistro->getCod_estado_copia(),
        ]);
        return $respuesta;
    }

    public function actualizarRegistro(Object $registroActualizar){
        $query = "UPDATE documento SET cod_idioma=?,cod_tipo_documento=?,
        cod_tipo_presentacion=?,titulo_documento=?,fecha_publicacion=?,editorial_publicacion=?,
        codigo_isbn=?,informacion_paginas=?,informacion_congreso=?,informacion_ssn=?,
        informacion_bib=?,direccion_archivo=?,cod_publicador=?, direccion_portada=?  WHERE cod_documento=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getCod_idioma(), 
            $registroActualizar->getCod_tipo_documento(),
            $registroActualizar->getCod_tipo_presentacion(), 
            $registroActualizar->getTitulo_documento(), 
            $registroActualizar->getFecha_publicacion(),
            $registroActualizar->getEditorial_publicacion(),
            $registroActualizar->getCodigo_isbn(), 
            $registroActualizar->getInformacion_paginas(), 
            $registroActualizar->getInformacion_congreso(),
            $registroActualizar->getInformacion_ssn(), 
            $registroActualizar->getInformacion_bib(), 
            $registroActualizar->getDireccion_archivo(),
            $registroActualizar->getCod_publicador(),
            $registroActualizar->getDireccion_portada(),
            $registroActualizar->getCod_documento()

        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM documento WHERE cod_documento=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM documento");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
    public function listarLibro(){
        $query = $this->con->prepare("SELECT * FROM documento WHERE cod_tipo_documento = '1'");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function listarArticulo(){
        $query = $this->con->prepare("SELECT * FROM documento WHERE cod_tipo_documento = '3'");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
    public function listarPonencia(){
        $query = $this->con->prepare("SELECT * FROM documento WHERE cod_tipo_documento = '2'");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;

    }
    public function listarDocumentoFisico(){
        $query = $this->con->prepare("SELECT * FROM listadocumentosfisicos");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }


    

    public function listarDocumentoFisicoNoValidado(){
        $query = $this->con->prepare("SELECT * FROM listalibrosnovalidados");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }


    public function graficoDvsF(){
        $query = $this->con->prepare("SELECT * FROM fvd");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }


    public function tipoDocumento(){
        $query = $this->con->prepare("SELECT * FROM graficoxtipo");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
    
    

    public function AceptarLibroNuevo($id)
    {
        $query = "UPDATE existencia_documento SET cod_estado_copia=2 WHERE cod_documento=?";
        $sentencia = $this->con->prepare($query);
        return $sentencia->execute([$id]);
    }


    public function darDocumentoFisico($id){
        $query = $this->con->prepare("SELECT * FROM listadocumentosfisicos where cod_documento=".$id    );
        $query->execute();
        return $query->fetch();
        
    }

    public function darDocumentoDigital($id){
        $query = $this->con->prepare("SELECT * FROM listadocumentosdigitales where cod_documento=".$id    );
        $query->execute();
        return $query->fetch();
        
    }

    public function listarDocumentoDigital(){
        $query = $this->con->prepare("SELECT * FROM listadocumentosdigitales");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;  
        }
        return $em;
    }

    public function cantidadLibros($codigoCliente){
        $sentencia = $this->con->prepare("SELECT * FROM cantidaddeprestamosxcliente WHERE cod_cliente =?");
        $sentencia->execute([$codigoCliente]);
        $row = $sentencia->fetch();
        return $row;
    }

//  //  //  //  //  //  


    public function informacionDocumentos(){
    $query = $this->con->prepare("SELECT * FROM info_documento");
    $query->execute();
    $em = array();
    while ($fila = $query->fetch()) {
        $em[] = $fila;
    }
    return $em;
    }

    public function filtradosInicio($idioma,$documento,$presentacion){
        $query = $this->con->prepare("SELECT * FROM info_documento where nom_idioma=? and nom_tipo_documento=? and nom_tipo_presentacion=?");
        $query->execute([$idioma,$documento,$presentacion]);
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    //Filtrados
    public function materias(){
        $query = $this->con->prepare("SELECT * FROM materia");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function idiomas(){
        $query = $this->con->prepare("SELECT * FROM idioma");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function tipoDoc(){
        $query = $this->con->prepare("SELECT * FROM tipo_documento");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function tipoPres(){
        $query = $this->con->prepare("SELECT * FROM tipo_presentacion");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function darInfoXdoc($documento){
        $query = $this->con->prepare("SELECT * FROM info_documento where cod_documento=?");
        $query->execute([$documento]);
        return $query->fetch();
    }
    
    public function buscarExistenciaXdocumento($documento)
    {
        $sentencia = $this->con->prepare("SELECT * FROM existencia_documento WHERE cod_documento=? and cod_estado_copia=2");
        $sentencia->execute([$documento]);
        $em = array();
        while ($fila = $sentencia->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function buscarExistenciaXdocumento2($documento)
    {
        $sentencia = $this->con->prepare("SELECT * FROM existencia_documento WHERE cod_documento=?");
        $sentencia->execute([$documento]);
        $em = array();
        while ($fila = $sentencia->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

 


//  //  //  //  //  

}
