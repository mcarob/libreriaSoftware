<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/administrador.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class administradorDAO extends BD  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(administrador $nuevoRegistro){
        
        $query = "INSERT INTO administrador (cod_administrador,cod_usuario,nom_administrador,
        telefono_administrador,correo_administrador) values (?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCodAdministrador(), 
                $nuevoRegistro->getCod_usuario(), 
                $nuevoRegistro->getNomAdministrador(),
                $nuevoRegistro->getTelefonoAdministrador(), 
                $nuevoRegistro->getCorreoAdministrador()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(administrador $registroActualizar){
        $query = "UPDATE administrador SET cod_usuario=?,nom_administrador=?,telefono_administrador=?,
        correo_administrador=? WHERE cod_administrador=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_usuario(), 
                $registroActualizar->getNomAdministrador(),
                $registroActualizar->getTelefonoAdministrador(),
                $registroActualizar->getCorreoAdministrador(), 
                $registroActualizar->getCodAdministrador()

        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM administrador WHERE cod_administrador=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM administrador");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
?>