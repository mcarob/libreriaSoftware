<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class DaoPeticionDigital extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(OBJECT $nuevoRegistro){
        
        $query = "INSERT INTO peticion_digital (cod_existencia,
        cod_usuario_cliente,
        fecha_peticion_digital) values (?,?,now())";
        $respuesta = $this->con->prepare($query)->execute([ 
            $nuevoRegistro->getcod_existencia(),
            $nuevoRegistro->getcod_usuario_cliente()
                        
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(OBJECT $registroActualizar){
        $query = "UPDATE peticion_digital SET cod_existencia=?,cod_usuario_cliente=?,fecha_peticion_digital=?
                  WHERE cod_peticion_digital=?";
        $respuesta = $this->con->prepare($query)->execute([
            $registroActualizar->getcod_existencia(),
            $registroActualizar->getcod_usuario_cliente(),
            $registroActualizar->getfecha_peticion_digital(),
            $registroActualizar->getcod_peticion_digital(),            
        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM peticion_digital WHERE cod_peticion_digital=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM peticion_digital");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function buscarxcodcliente($cliente){
        $query = $this->con->prepare("SELECT * FROM prestamosdigitales where cod_cliente=?");
        $query->execute([$cliente]);
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }


}
?>