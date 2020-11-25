<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/Publicador.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/enviar.php');

class DaoPublicador extends DB implements dao_interface
{

    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

  
    public function agregarRegistro(Object $nuevoRegistro)
    {
        $query = "INSERT INTO publicador (cod_publicador,
    cod_usuario,
    ced_publicador,
    nom_publicador,
    correo_publicador,
    direccion_publicador,
    ciudad_publicador,
    pais_publicador,
    telefono_publicador) values (?,?,?,?,?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCodPublicador(), $nuevoRegistro->getCod_usuario(), $nuevoRegistro->getCedPublicador(),
            $nuevoRegistro->getNomPublicador(), $nuevoRegistro->getCorreoPublicador(), $nuevoRegistro->getDireccionPublicador(), $nuevoRegistro->getCiudadPublicador(),
            $nuevoRegistro->getPaisPublicador(), $nuevoRegistro->getTelefonoPublicador()
        ]);
        return $respuesta;
    }

    
    public function agregarRegistroPlataforma(Publicador $c,$pass)
    {
        $cor= new enviarCorreo();
        $codigo=(rand(0,9).rand(0,9).rand(0,9).rand(0,9));
        $mensaje="Muchas gracias por registrarse en la aplicación de El Bosquecillo".
        " para continuar con el proceso de inscripción, por favor ingrese a la aplicación con su correo electrónico y la contraseña,  
        ademas deberá ingresar el codigo de verificacion que esta a continuación :  ".$codigo. ". al acceder la primera vez a la aplicación. 
        para poder acceder a todos los beneficios, tiene que esperar a que su usuario sea verificado por nuestros empleados. tan pronto
        se valide, será notificado.
         Muchas Gracias";
        $md5Codigo=md5($pass);
        $sentencia = "CALL agregarpublicador(?,?,?,?,?,?,?,?,?)";
        $r = $this->con->prepare($sentencia)->execute([$c->getCorreoPublicador(),
                                                                $md5Codigo,
                                                                $codigo,
                                                                $c->getNomPublicador(),
                                                                $c->getCedPublicador(),
                                                                $c->getDireccionPublicador(),
                                                                $c->getCiudadPublicador(),
                                                                $c->getPaisPublicador(),
                                                                $c->getTelefonoPublicador()]);
        if($r==1){
            $r1=$cor->enviarMensaje($c->getNomPublicador(),$c->getCorreoPublicador(),"Registro",$mensaje);
            if($r1==0){
                return $r1;
            }else{
                return 1;
            }
        }else{
            return "Hubo un error con el registro, por favor intentelo mas tarde";
        }
    }



    public function actualizarRegistro(Object $registroActualizar)
    {
        $query = "UPDATE publicador SET (
            ced_publicador=?,
            nom_publicador=?,
            correo_publicador=?,
            direccion_publicador=?,
            ciudad_publicador=?,
            pais_publicador=?,
            telefono_publicador=?) WHERE cod_publicador=?";

        $respuesta = $this->con->prepare($query)->execute([
            $registroActualizar->getCedPublicador(), $registroActualizar->getNomPublicador(),
            $registroActualizar->getCorreoPublicador(), $registroActualizar->getDireccionPublicador(),
            $registroActualizar->getCiudadPublicador(), $registroActualizar->getPaisPublicador(),
            $registroActualizar->getTelefonoPublicador(), $registroActualizar->getCodPublicador()
        ]);
        return $respuesta;
    }


    public function listar()
    {
        $query = $this->con->prepare("SELECT * FROM listapublicadoresActivos");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function listarPublicadoresSinValidar()
    {
        $query = $this->con->prepare("SELECT * FROM listaPublicadoresnovalidados");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function darPublicadorNoValidadoxCod($id)
    {
        $query = $this->con->prepare("SELECT * FROM listaPublicadoresnovalidados where cod_publicador=".$id);
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    
    

    public function eliminarRegistro($idRegistro)
    {
    }
}
