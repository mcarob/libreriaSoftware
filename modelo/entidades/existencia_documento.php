<?php

class Existencia_documento{
    
  private $cod_existencia_documento;
  private $cod_documento;
  private $cod_estado_copia;

    public function __construct($cod_existencia_documento, $cod_documento, $cod_estado_copia)
    {
        $this->cod_existencia_documento = $cod_existencia_documento;
        $this->cod_documento = $cod_documento;
        $this->$this->cod_existencia_documento = $cod_estado_copia;
    }

  public function getCod_existencia_documento()
  {
    return $this->cod_existencia_documento;
  }

  public function setCod_existencia_documento($cod_existencia_documento)
  {
    $this->cod_existencia_documento = $cod_existencia_documento;

    return $this;
  }

  public function getCod_documento()
  {
    return $this->cod_documento;
  }

  public function setCod_documento($cod_documento)
  {
    $this->cod_documento = $cod_documento;

    return $this;
  }

  public function getCod_estado_copia()
  {
    return $this->cod_estado_copia;
  }

  public function setCod_estado_copia($cod_estado_copia)
  {
    $this->cod_estado_copia = $cod_estado_copia;

    return $this;
  }
}
?>