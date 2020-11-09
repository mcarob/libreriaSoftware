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
       // No se le hace update al prestamo
    }


    public function listar()
    {

    }
    public function eliminarRegistro($idRegistro)
    {
        
    }
}
