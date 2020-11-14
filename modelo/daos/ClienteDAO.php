<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/Cliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class ClienteDAO extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(Cliente $nuevoRegistro){
        
        $query = "INSERT INTO cliente (cod_cliente,cod_usuario,nom_cliente,
        telefono_cliente,correo_cliente,direccion_cliente,habilitado) values (?,?,?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCod_cliente(), 
                $nuevoRegistro->getCod_usuario(), 
                $nuevoRegistro->getNom_cliente(),
                $nuevoRegistro->getTelefono_cliente(), 
                $nuevoRegistro->getCorreo_cliente(), 
                $nuevoRegistro->getDireccion_cliente(),
                $nuevoRegistro->getHabilitado()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(Cliente $registroActualizar){
        $query = "UPDATE cliente SET cod_usuario=?,nom_cliente=?,telefono_cliente=?,
        correo_cliente=?,direccion_cliente=?,habilitado=? WHERE cod_cliente=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_usuario(), 
                $registroActualizar->getNom_cliente(),
                $registroActualizar->getTelefono_cliente(),
                $registroActualizar->getCorreo_cliente(), 
                $registroActualizar->getDireccion_cliente(),
                $registroActualizar->getHabilitado(),
                $registroActualizar->getCod_cliente()

        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM cliente WHERE cod_cliente=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM cliente");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
?>