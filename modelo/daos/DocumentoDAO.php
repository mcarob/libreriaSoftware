<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/Entidades/Documento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Conexion/BaseDatos.php');

class DocumentoDAO extends BD  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(Documento $nuevoRegistro){
        
        $query = "INSERT INTO documento (cod_documento,cod_idioma,cod_tipo_documento,
        cod_tipo_presentacion,titulo_documento,fecha_publicacion,editorial_publicacion,
        codigo_isbn,informacion_paginas,informacion_congreso,informacion_ssn,
        informacion_bib,direccion_archivo,cod_publicador) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCod_documento(), 
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
                $nuevoRegistro->getCod_publicador()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(Documento $registroActualizar){
        $query = "UPDATE documento SET cod_idioma=?,cod_tipo_documento=?,
        cod_tipo_presentacion=?,titulo_documento=?,fecha_publicacion=?,editorial_publicacion=?,
        codigo_isbn=?,informacion_paginas=?,informacion_congreso=?,informacion_ssn=?,
        informacion_bib=?,direccion_archivo=?,cod_publicador=? WHERE cod_documento=?";
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
            $nuevoRegistro->getCod_documento()

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
}
?>