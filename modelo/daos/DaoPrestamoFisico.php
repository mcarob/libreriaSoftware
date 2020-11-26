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

    
    public function nuevoprestamoProce($docu, $correo)
    {
        $query = "CALL agregarprestamof(?,?)";
        $respuesta2 = $this->con->prepare($query)->execute([$docu,$correo]);
        if($respuesta2==1){
            return "1";
        }
        return "2";
    }

    public function agregarRegistro(OBJECT $nuevoRegistro)
    {
        $query = "INSERT INTO prestamo_fisico (
        cod_existencia,
        cod_usuario_cliente,
        cod_estado_prestamo,
        fecha_prestamo_fisico,
        fecha_devolucion_fisico) values (?,?,?,now(),now()+8*interval'1 day')";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCodExistencia(), $nuevoRegistro->getCod_usuario_cliente(),
            $nuevoRegistro->getCod_estado_prestamo()
        ]);
        return $respuesta;
    }

    public function agregarEspera(OBJECT $nuevoRegistro)
    {
        $query = "INSERT INTO prestamo_fisico (
        cod_existencia,
        cod_usuario_cliente,
        cod_estado_prestamo,
        fecha_prestamo_fisico,
        fecha_devolucion_fisico) values (?,?,?,now(),null";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCodExistencia(), $nuevoRegistro->getCod_usuario_cliente(),
            $nuevoRegistro->getCod_estado_prestamo()
        ]);
        return $respuesta;
    }

    public function cambiarEspera($idPrestamo)
    {
        $sentencia=$this->con->prepare("UPDATE prestamo_fisico set cod_estado_prestamo= 1 WHERE cod_prestamo_fisico=?");
        $respuesta=$sentencia->execute([$idPrestamo]);
        return $respuesta;

        //agregar le envio de correo
    }

    public function verRetraso($fecha)
    {
     if($fecha!=null)
     {   
        $hoy = strtotime(date("Y-m-d"),time());
        $dev = strtotime($fecha);
        
        if($dev<$hoy)
        {
            return 1;
        }
     }else
     {
         return 0;
     }

    }
    public function actualizarRegistro($registroActualizar)
    {
       
    }

    public function listar()
    {
        // VISTA PARA OBTENER LOS DOCUMENTOS PRESTADOS, PREGUNTAR EL CODIGO DEL ESTADO_PRESTAMO
        $query = $this->con->prepare("SELECT * FROM listaLibrosFisicosPrestados where (cod_estado_prestamo=1 or cod_estado_prestamo=2)");
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
    
    public function darPrestamoFisicoxCod2($codPrestamo){
        $query = $this->con->prepare("SELECT * FROM prestamo_fisico where cod_prestamo_fisico=?");
        $query->execute([$codPrestamo]);
        return $query->fetch();    
    }

    public function darPrestamoFisicoxCod($id){
        $query = $this->con->prepare("SELECT * FROM listaLibrosFisicosPrestados where cod_prestamo_fisico=".$id);
        $query->execute();
        return $query->fetch();    
    }

    public function darExistenciaFisica($id){
        $query = $this->con->prepare("SELECT * FROM existencia_documento where cod_existencia_documento=?");
        $query->execute([$id]);
        return $query->fetch();    
    }

    public function aceptarDevo($idPrestamoFisico){

        $codExistencia = $this->darPrestamoFisicoxCod($idPrestamoFisico)[1];
        $query = "UPDATE prestamo_fisico SET cod_estado_prestamo=4, fecha_devolucion_fisico=now() where cod_prestamo_fisico=".$idPrestamoFisico;
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
    
        $query2 = "UPDATE existencia_documento SET cod_estado_copia=2 where cod_existencia_documento=".$codExistencia; 
        $sentencia2 = $this->con->prepare($query2);
        return $sentencia2->execute([]);
        
    }

    public function prestamosFisicosxCodCliente($cod_cliente){
        $sentencia = $this->con->prepare("SELECT * FROM documentosfisicosprestados WHERE cod_usuario_cliente =?");
        $sentencia->execute($cod_cliente);
        $em = array();
        while ($fila = $sentencia->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }

    public function cambiarEstado($estado,$cod_prestamo,$codigo_cliente)
    {
        $sentencia = $this->con->prepare("UPDATE prestamo_fisico SET cod_estado_prestamo=? WHERE cod_prestamo_fisico=? AND cod_usuario_cliente =?");
        $sentencia->execute($estado,$cod_prestamo,$codigo_cliente);
        $em = array();
        while ($fila = $sentencia->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }


    public function cambiarEstadoExistencia($existencia)
    {
            $sentencia=$this->con->prepare("UPDATE existencia_documento set cod_estado_copia= 3 WHERE cod_existencia_documento=?");
            $respuesta=$sentencia->execute([$existencia]);
            return $respuesta;
    }

    public function cambiarEstadoPrestamo($cod)
    {
            $sentencia=$this->con->prepare("UPDATE prestamo_fisico set cod_estado_prestamo= 2 WHERE cod_prestamo_fisico=?");
            $respuesta=$sentencia->execute([$cod]);
            return $respuesta;
    }

    public function cambiarEstadoPrestamoEnCola($cod)
    {
            $sentencia=$this->con->prepare("UPDATE prestamo_fisico set cod_estado_prestamo= 1, fecha_prestamo_fisico=now(),fecha_devolucion_fisico=now()+8*interval'1 day' WHERE cod_prestamo_fisico= ?");
            $respuesta=$sentencia->execute([$cod]);
            return $respuesta;
    }


    public function verificarDisponibilidad($idExistencia,$idPrestamo)
    {
        $ex=$this->darExistenciaFisica($idExistencia);
        $fechas=array();

        if($ex["cod_estado_copia"]==2)
            {
                
                $prestamo=$this->darPrestamoFisicoxCod2($idPrestamo);
                $this->cambiarEstadoExistencia($ex["cod_existencia_documento"]);
                $this->cambiarEstadoPrestamoEnCola($prestamo["cod_prestamo_fisico"]);

                $fecha_actual = date("d-m-Y");
                $devo=date("d-m-Y",strtotime($fecha_actual."+ 8 days")); 

                array_push($fechas,$fecha_actual,$devo);
                
                //ENVIAR CORREO
                return $fechas;


            }

        return $fechas;
    }



    

}
