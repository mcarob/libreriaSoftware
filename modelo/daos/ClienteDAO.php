<?php
include_once('daointerface.php');
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
    

    public function agregarRegistro(Object $nuevoRegistro){
        
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


    public function actualizarRegistro(Object $registroActualizar){
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
        $query = $this->con->prepare("SELECT * FROM listaClientesActivos");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function devolverEstudiante($codigo_usuario){
        $query=$this->con->prepare('SELECT * FROM cliente WHERE cod_usuario=:user');
        $query->execute(['user'=>$codigo_usuario]);
        if($query->rowCount()){
            foreach ($query as $kk) {
                $cliente_devolver = new Cliente($kk['cod_cliente'],$kk['cod_usuario'],$kk['nom_cliente'],$kk['telefono_cliente'],$kk['correo_cliente'],$kk['direccion_cliente'],$kk['habilitado']);
                return $cliente_devolver;
            }
        }
    }
}
?>