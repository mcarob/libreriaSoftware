<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/peticion_digital.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/enviar.php');

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

    public function darEmpleadoxCodUsu($id){
        $query = $this->con->prepare("SELECT * FROM empleado where cod_usuario=".$id);
        $query->execute();
        return $query->fetch(); 
    }
    public function agregarRegistroEmpleado($nombre, $apellido, $correo, $telefono, $cedula){
        $cor= new enviarCorreo();
        $query2=$this->con->prepare('SELECT * FROM usuario WHERE user_usuario=?');
        $query2->execute([$correo]);
        if ($query2->rowCount()) {
            return "3";
        }
        $query = "CALL agregarempleado(?,?,?,?,?,?)";
        $codigo=intval(rand(0,9).rand(0,9).rand(0,9).rand(0,9));
        $mensaje="Muchas gracias por registrarse en la aplicación de EL Bosquecillo".
        " para continuar con el proceso de inscripción, por favor ingrese a la aplicación con su correo electrónico, 
        deberá ingresar el codigo de verificacion que esta a continuación :  ".$codigo. ". al acceder la primera vez a la aplicación su contraseña es la cédula                    
        Muchas Gracias";
        $codc= md5($codigo);
        $contra = md5($cedula);
        $nombres= $nombre." ".$apellido;
        $respuesta2 = $this->con->prepare($query)->execute([$correo,$contra,$codc,$nombres,$telefono,$cedula]);
        if($respuesta2==1){
            $r1=$cor->enviarMensaje($nombres,$correo,"Nuevo correo",$mensaje);
            return "1";
        }

        return "2";
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


    
    public function editarEmepladoProce($nombre, $correo, $telefono, $id_usu, $contraActual, $contraNueva){
       
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
