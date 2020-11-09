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

    public function agregarRegistro(Publicador $nuevoRegistro)
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


    public function actualizarRegistro(Publicador $registroActualizar)
    {
        $query = "INSERT INTO publicador (
            ced_publicador=?,
            nom_publicador=?,
            correo_publicador=?,
            direccion_publicador=?,
            ciudad_publicador=?,
            pais_publicador=?,
            telefono_publicador=?) WHERE cod_publicador=?";

        $respuesta = $this->con->prepare($query)->execute([
            $registroActualizar->getCedPublicador(),$registroActualizar->getNomPublicador(), 
            $registroActualizar->getCorreoPublicador(), $registroActualizar->getDireccionPublicador(), 
            $registroActualizar->getCiudadPublicador(),$registroActualizar->getPaisPublicador(),
            $registroActualizar->getTelefonoPublicador(),$registroActualizar->getCodPublicador()
        ]);
        return $respuesta;
    }


    public function listar()
    {
        $query = "select * from usuario";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Usuario($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6], $key[7], $key[8]);
        }
        return $usuarios;
    }
    public function eliminarRegistro($idRegistro)
    {
    }
}
