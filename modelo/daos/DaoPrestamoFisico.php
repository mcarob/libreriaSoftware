<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/PrestamoFisico.php');

class DaoPrestamoFisico extends DB implements dao_interface
{

    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(PrestamoFisico $nuevoRegistro)
    {
        $query = "INSERT INTO prestamo_fisico (cod_prestamo_fisico,
        cod_existencia,
        cod_usuario_cliente,
        cod_estado_prestamo,
        fecha_prestamo_fisico,
        fecha_devolucion_fisico) values (?,?,?,?,?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCodPrestamoFisico(), $nuevoRegistro->getCodExistencia(), $nuevoRegistro->getCod_usuario_cliente(),
            $nuevoRegistro->getCod_estado_prestamo(), $nuevoRegistro->getFecha_prestamo_fisico(), $nuevoRegistro->getFecha_devolucion_fisico()
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

    }
    public function eliminarRegistro($idRegistro)
    {
        
    }
}
