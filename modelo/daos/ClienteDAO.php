<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/Cliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/enviar.php');

class ClienteDAO extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    
    public function agregarRegistroPlataforma(Cliente $c,$pass){
        $cor= new enviarCorreo();
        $codigo=(rand(0,9).rand(0,9).rand(0,9).rand(0,9));
        $mensaje="Muchas gracias por registrarse en la aplicación de EL Bosquecillo".
        " para continuar con el proceso de inscripción, por favor ingrese a la aplicación con su correo electrónico, 
        deberá ingresar el codigo de verificacion que esta a continuación :  ".$codigo. ". al acceder la primera vez a la aplicación
         Muchas Gracias";
        $md5Codigo=md5($pass);
        $sentencia = "CALL agregarcliente(?,?,?,?,?,?)";
        $r = $this->con->prepare($sentencia)->execute([$c->getCorreo_cliente(),
                                                                $md5Codigo,
                                                                $codigo,
                                                                $c->getNom_cliente(),
                                                                $c->getTelefono_cliente(),
                                                                $c->getDireccion_cliente()]);
        if($r==1){
            $r1=$cor->enviarMensaje("Miguel","miguelcaro@outlook.com","otro",$mensaje);
            if($r1==0){
                return $r1;
            }else{
                return 1;
            }
        }else{
            return "Hubo un error con el registro, por favor intentelo mas tarde";
        }
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

    public function agregarCl($nombre,$apellido, $correo, $telefono, $direccion){

        $query2=$this->con->prepare('SELECT * FROM usuario WHERE user_usuario=?');
        $query2->execute([$correo]);
        if ($query2->rowCount()) {
            return "El correo ya existe, intente con otro";
        }
        $query = "CALL agregarcliente(?,?,?,?,?,?)";
        $codigo=intval(rand(0,9).rand(0,9).rand(0,9).rand(0,9));
        $nombres= $nombre." ".$apellido;
        $respuesta2 = $this->con->prepare($query)->execute([$correo,$telefono,$codigo,$nombres,$telefono,$direccion ]);
        if($respuesta2==1){
            return "Se agrego correctamente";
        }

        return "Error en el registro";
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

    public function devolverCliente($codigo_usuario){
        $query=$this->con->prepare('SELECT * FROM cliente WHERE cod_usuario=:user');
        $query->execute([$codigo_usuario]);
        if ($query->rowCount()) {
            $key = $query->fetchAll()[0];
            return new Cliente($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6]);
        } else {
            return null;
        }
    }


    public function devolverClienteXU($user){
        $query=$this->con->prepare('select cliente.* from usuario,cliente where usuario.cod_usuario=cliente.cod_usuario and usuario.user_usuario=?');
        $query->execute([$user]);
        if ($query->rowCount()) {
            $key = $query->fetchAll()[0];
            return new Cliente($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6]);
        } else {
            return null;
        }
    }
    public function cantidadPrestamos($codigoCliente){
        $sentencia = $this->con->prepare("SELECT * FROM cantidaddeprestamosxcliente WHERE cod_cliente =?");
        $sentencia->execute([$codigoCliente]);
        $row = $sentencia->fetch();
        return $row;
    }

    public function listarPrestamosXcliente($codigoCliente){
        $query = $this->con->prepare("SELECT * FROM listalibrosfisicosprestados WHERE cod_usuario_cliente =?");
        $query->execute([$codigoCliente]);
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
    


}
?>