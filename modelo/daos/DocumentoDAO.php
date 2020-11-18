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
        echo("linea20");
        print_r($nuevoRegistro);
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


    public function listarDocumentoFisico(){
        $query = $this->con->prepare("SELECT * FROM listadocumentosfisicos");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
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

//  //  //  //  //  //  


    public function informacionDocumentos(){
    $query = $this->con->prepare("SELECT * FROM info_documento ");
    $query->execute();
    $em = array();
    while ($fila = $query->fetch()) {
        $em[] = $fila;
    }
    return $em;
    }


    public function materias(){
        $query = $this->con->prepare("SELECT * FROM documentosxmateria");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function idiomas(){
        $query = $this->con->prepare("SELECT * FROM documentosxidioma");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

//  //  //  //  //  

}
?>