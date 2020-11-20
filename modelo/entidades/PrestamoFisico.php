<?php


class PrestamoFisico{
    
//No faltaria la fecha en la cual deberia ser entregado?
    private $codPrestamoFisico;
    private $codExistencia;
    private $cod_usuario_cliente;
    private $cod_estado_prestamo;
    private $fecha_prestamo_fisico;
    private $fecha_devolucion_fisico;

    
    public function __construct($codPrestamoFisico,$codExistencia,$cod_usuario_cliente
    ,$cod_estado_prestamo,$fecha_prestamo_fisico,$fecha_devolucion_fisico)
    {
        $this->codPrestamoFisico = $codPrestamoFisico;
        $this->codExistencia = $codExistencia;
        $this->cod_usuario_cliente = $cod_usuario_cliente;
        $this->cod_estado_prestamo = $cod_estado_prestamo;
        $this->fecha_prestamo_fisico = $fecha_prestamo_fisico;
        $this->fecha_devolucion_fisico = $fecha_devolucion_fisico;

    }
    

    /**
     * Get the value of codPrestamoFisico
     */ 
    public function getCodPrestamoFisico()
    {
        return $this->codPrestamoFisico;
    }

    /**
     * Set the value of codPrestamoFisico
     *
     * @return  self
     */ 
    public function setCodPrestamoFisico($codPrestamoFisico)
    {
        $this->codPrestamoFisico = $codPrestamoFisico;
        return $this;
    }

    /**
     * Get the value of codExistencia
     */ 
    public function getCodExistencia()
    {
        return $this->codExistencia;
    }

    /**
     * Set the value of codExistencia
     *
     * @return  self
     */ 
    public function setCodExistencia($codExistencia)
    {
        $this->codExistencia = $codExistencia;

        return $this;
    }

    /**
     * Get the value of cod_usuario_cliente
     */ 
    public function getCod_usuario_cliente()
    {
        return $this->cod_usuario_cliente;
    }

    /**
     * Set the value of cod_usuario_cliente
     *
     * @return  self
     */ 
    public function setCod_usuario_cliente($cod_usuario_cliente)
    {
        $this->cod_usuario_cliente = $cod_usuario_cliente;

        return $this;
    }

    /**
     * Get the value of cod_estado_prestamo
     */ 
    public function getCod_estado_prestamo()
    {
        return $this->cod_estado_prestamo;
    }

    /**
     * Set the value of cod_estado_prestamo
     *
     * @return  self
     */ 
    public function setCod_estado_prestamo($cod_estado_prestamo)
    {
        $this->cod_estado_prestamo = $cod_estado_prestamo;

        return $this;
    }

    /**
     * Get the value of fecha_prestamo_fisico
     */ 
    public function getFecha_prestamo_fisico()
    {
        return $this->fecha_prestamo_fisico;
    }

    /**
     * Set the value of fecha_prestamo_fisico
     *
     * @return  self
     */ 
    public function setFecha_prestamo_fisico($fecha_prestamo_fisico)
    {
        $this->fecha_prestamo_fisico = $fecha_prestamo_fisico;

        return $this;
    }

    /**
     * Get the value of fecha_devolucion_fisico
     */ 
    public function getFecha_devolucion_fisico()
    {
        return $this->fecha_devolucion_fisico;
    }

    /**
     * Set the value of fecha_devolucion_fisico
     *
     * @return  self
     */ 
    public function setFecha_devolucion_fisico($fecha_devolucion_fisico)
    {
        $this->fecha_devolucion_fisico = $fecha_devolucion_fisico;

        return $this;
    }
}

?>
