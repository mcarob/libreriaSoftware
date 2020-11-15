<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class DaoEmpleado extends DB implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(object $nuevoRegistro){
        
        $query = "INSERT INTO empleado (cod_empleado,
        cod_usuario,
        ced_empleado,
        nom_empleado,
        telefono_empleado,
        correo_empleado) values (?,?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCod_empleado(), 
            $nuevoRegistro->getCod_usuario(),
            $nuevoRegistro->getCed_empleado(),
            $nuevoRegistro->getNom_empleado(),
            $nuevoRegistro->getTelefono_empleado(),
            $nuevoRegistro->getCorreo_empleado()           
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(object $registroActualizar){
        $query = "UPDATE empleado SET ced_empleado=?,nom_empleado=?,telefono_empleado=?,correo_empleado=?
                  WHERE cod_empleado=?";
        $respuesta = $this->con->prepare($query)->execute([
            $registroActualizar->getCed_empleado(),
            $registroActualizar->getNom_empleado(),
            $registroActualizar->getTelefono_empleado(),
            $registroActualizar->getCorreo_empleado(),
            $registroActualizar->getCod_empleado()
        ]);
        return $respuesta;

    }
    
    //No hay eliminar ni inactivar
    public function eliminarRegistro($idRegistro){
    }

    //VISTA CON USUARIOS ACTIVOS E INACTIVOS
    public function listar(){
        $query = $this->con->prepare("SELECT * FROM listaEmpleadosActivos");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }


    
}
