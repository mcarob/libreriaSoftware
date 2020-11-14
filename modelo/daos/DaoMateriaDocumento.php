<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/materia_documento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class DaoMateriaDocumento extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(Materia_documento $nuevoRegistro){
        
        $query = "INSERT INTO materia_documento (cod_materia_documento,
        cod_documento,
        cod_materia) 
        values (?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getcod_materia_documento(), 
            $nuevoRegistro->getcod_documento(),
            $nuevoRegistro->getcod_materia()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(Materia_documento $registroActualizar){
        $query = "UPDATE materia_documento SET cod_materia_documento=?,cod_documento=?,cod_materia=?
                  WHERE cod_materia_documento=?";
        $respuesta = $this->con->prepare($query)->execute([
            $registroActualizar->getcod_materia_documento(), 
            $registroActualizar->getcod_documento(),
            $registroActualizar->getcod_materia()      
        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM materia_documento WHERE cod_materia_documento=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM materia_documento");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
?>