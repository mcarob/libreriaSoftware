<?php

class Peticion_digital{
    
  private $cod_peticion_digital;
  private $cod_existencia;
  private $cod_usuario_cliente;
  private $fecha_peticion_digital;
    

public function __construct($cod_peticion_digital,$cod_existencia,$cod_usuario_cliente, $fecha_peticion_digital)
{
    $this->cod_peticion_digital=$cod_peticion_digital;
    $this->cod_existencia=$cod_existencia;
    $this->cod_usuario_cliente=$cod_usuario_cliente;
    $this->fecha_peticion_digital=$fecha_peticion_digital;

}



  public function getcod_peticion_digital()
  {
    return $this->cod_peticion_digital;
  }
  public function setcod_peticion_digital($cod_peticion_digital)
  {
    $this->cod_peticion_digital = $cod_peticion_digital;

    return $this;
  }


  public function getcod_existencia()
  {
    return $this->cod_existencia;
  }
  public function setcod_existencia($cod_existencia)
  {
    $this->cod_existencia = $cod_existencia;

    return $this;
  }

  public function getcod_usuario_cliente()
  {
    return $this->cod_usuario_cliente;
  }
  public function setcod_usuario_cliente($cod_usuario_cliente)
  {
    $this->cod_usuario_cliente = $cod_usuario_cliente;

    return $this;
  }


  public function getfecha_peticion_digital()
  {
    return $this->fecha_peticion_digital;
  }
  public function setfecha_peticion_digital($fecha_peticion_digital)
  {
    $this->fecha_peticion_digital = $fecha_peticion_digital;

    return $this;
  }
}
?>