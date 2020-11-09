<?php

class Materia_documento{
    
  private $cod_materia_documento;
  private $cod_documento;
  private $cod_materia;
    

public function __construct($cod_materia_documento,$cod_documento,$cod_materia)
{
    $this->cod_materia_documento=$cod_materia_documento;
    $this->cod_documento=$cod_documento;
    $this->cod_materia=$cod_materia;

}



  public function getcod_materia_documento()
  {
    return $this->cod_materia_documento;
  }
  public function setcod_materia_documento($cod_materia_documento)
  {
    $this->cod_materia_documento = $cod_materia_documento;

    return $this;
  }


  public function getcod_documento()
  {
    return $this->cod_documento;
  }
  public function setcod_documento($cod_documento)
  {
    $this->cod_documento = $cod_documento;

    return $this;
  }

  public function getcod_materia()
  {
    return $this->cod_materia;
  }
  public function setcod_materia($cod_materia)
  {
    $this->cod_materia = $cod_materia;

    return $this;
  }

}
?>