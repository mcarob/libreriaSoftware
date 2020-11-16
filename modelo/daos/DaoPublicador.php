<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/Publicador.php');

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

    public function darPublicadorxCod($id)
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
