<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/Autores_documento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class Autores_documentoDAO extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(Autores_documento $nuevoRegistro){
        
        $query = "INSERT INTO autores_documento (cod_autores_documento,cod_documento,cod_autor) values (?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCodAutoresDocumento(), 
                $nuevoRegistro->getCodDocumento(), 
                $nuevoRegistro->getCodAutor()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(Autores_documento $registroActualizar){
        $query = "UPDATE autores_documento SET cod_documento=?,cod_autor=? WHERE cod_autores_documento=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCodDocumento(), 
                $registroActualizar->getCodAutor(),
                $registroActualizar->getCodAutoresDocumento()
        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM autores_documento WHERE cod_autores_documento=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM autores_documento");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
?>