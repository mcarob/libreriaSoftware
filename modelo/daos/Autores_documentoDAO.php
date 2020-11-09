<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/Modelo/Entidades/Autores_documento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/conexion/db.php');


class Autores_documentoDAO
{
    
    private $con;
    private $autores_documento;

    
    public function __construct()
    {
        $claseCon = new DB();
        $this->con =$claseCon->connect();
    }
    

    public function agregarAutoresDocumento(Autores_documento $autores_documento){
        
        $sql="insert into academica_hoja (COD_HOJA_VIDA, ACADEMICA_TITULO, ACADEMICA_INSTITUTO, ACADEMICA_DESDE,
        ACADEMICA_HASTA,COD_TIPO_FORMACION)
        values 
        (?,?,?,?,?,?)";
        $respuesta=$this->con->prepare($sql)->execute([$academica->getCodHojaVida(),$academica->getFormacionTitulo(),
        $academica->getFormacionInstitucion(), $academica->getFormacionDesde(), $academica->getFormacionHasta(),
        $academica->getTipoFormacion()]);
        
        return $respuesta;

    }


    public function EDITARHojaAcademica(AcademicaHoja $academica){
        
        $sql="UPDATE academica_hoja SET (ACADEMICA_TITULO, ACADEMICA_INSTITUTO, ACADEMICA_DESDE,
        ACADEMICA_HASTA,COD_TIPO_FORMACION)
        values 
        (?,?,?,?,?)";
        $respuesta=$this->con->prepare($sql)->execute([$academica->getFormacionTitulo(),
        $academica->getFormacionInstitucion(), $academica->getFormacionDesde(), $academica->getFormacionHasta(),
        $academica->getTipoFormacion()]);
        return $respuesta;

    }
    public function pasarInformaciones($var){
        $sql="SELECT  * FROM academica_tipo_formacion where cod_hoja_vida=?";
        $respuesta=$this->con->prepare($sql);
        $respuesta->execute([$var]);
        return $respuesta->fetchall();

    }
    public function buscarAcademica($cod)
    {
        $sentencia = $this->con->prepare("SELECT * FROM academica_hoja  WHERE cod_hoja_vida=?");
        $sentencia->execute([$cod]);
        $em = array();
        while ($fila = $sentencia->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
?>