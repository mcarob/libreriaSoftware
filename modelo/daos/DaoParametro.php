<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/parametro.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class DaoParametro extends db  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(Parametro $nuevoRegistro){
        
        $query = "INSERT INTO parametro (cod_parametro,
        nom_parametro,
        valor_num_parametro,
        valor_str_parametro) values (?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCod_parametro(), 
            $nuevoRegistro->getNom_parametro(),
            $nuevoRegistro->getValor_num_parametro(),
            $nuevoRegistro->getValor_str_parametro()            
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(Parametro $registroActualizar){
        $query = "UPDATE parametro SET nom_parametro=?,valor_num_parametro=?,valor_str_parametro=?
                  WHERE cod_parametro=?";
        $respuesta = $this->con->prepare($query)->execute([
            $registroActualizar->getCod_parametro(), 
            $registroActualizar->getNom_parametro(),
            $registroActualizar->getValor_num_parametro(),
            $registroActualizar->getValor_str_parametro()            
        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM parametro WHERE cod_parametro=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM parametro");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
?>