<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/administrador.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class administradorDAO extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(object $nuevoRegistro){
        
        $query = "INSERT INTO administrador (cod_administrador,cod_usuario,nom_administrador,
        telefono_administrador,correo_administrador) values (?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCodAdministrador(), 
                $nuevoRegistro->getCodUsuario(), 
                $nuevoRegistro->getNomAdministrador(),
                $nuevoRegistro->getTelefonoAdministrador(), 
                $nuevoRegistro->getCorreoAdministrador()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(object $registroActualizar){
        $query = "UPDATE administrador SET cod_usuario=?,nom_administrador=?,telefono_administrador=?,
        correo_administrador=? WHERE cod_administrador=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCodUsuario(), 
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

    public function darAdmixcodUsu($id){
        $query = $this->con->prepare("SELECT * FROM administrador where cod_usuario=".$id);
        $query->execute();
        return $query->fetch(); 
    }

    public function editarAdmiProce($nombre, $correo, $telefono, $id_usu, $contraActual, $contraNueva){
       
        $contraEncriptada = md5($contraActual);
        $query4=$this->con->prepare('SELECT * FROM usuario WHERE pass_usuario=? and cod_usuario=?');
        $query4->execute([$contraEncriptada, $id_usu]);
        if (!$query4->rowCount()) {
            return "8";
        }

        $query = "CALL editarperfil(?,?,?,?,?)";
        $respuesta2 = $this->con->prepare($query)->execute([$nombre,$correo,$telefono,$id_usu,$contraNueva]);
        if($respuesta2==1){
            return "1";
        }

        return "2";
    }
}
?>