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


    public function actualizarRegistro($registroActualizar)
    {
       // No se le hace update al prestamo
    }

    public function listar()
    {
        // VISTA PARA OBTENER LOS DOCUMENTOS PRESTADOS, PREGUNTAR EL CODIGO DEL ESTADO_PRESTAMO
        $query = $this->con->prepare("SELECT * FROM listaLibrosFisicosPrestados where cod_estado_prestamo=3");
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

    public function aceptarDevo($idPrestamoFisico){
        //preguntar estados
        $query = "UPDATE prestamo_fisico SET cod_estado_prestamo=2 where cod_prestamo_fisico=".$idPrestamoFisico;
        $sentencia = $this->con->prepare($query);
        return $sentencia->execute([]);
    }
}
