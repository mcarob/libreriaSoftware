<?php

class Empleado{

  private $cod_empleado; 
  private $cod_usuario;
  private $ced_empleado; 
  private $nom_empleado; 
  private $telefono_empleado;
  private $correo_empleado; 

  public function __construct($cod_empleado, $cod_usuario, $ced_empleado, $nom_empleado, $telefono_empleado, $correo_empleado)
  {
      $this->cod_empleado = $cod_empleado;
      $this->ced_empleado = $ced_empleado;
      $this->nom_empleado = $nom_empleado;
      $this->$telefono_empleado = $telefono_empleado;   
      $this->correo_empleado = $correo_empleado;
    
  }

  public function getCod_empleado()
  {
    return $this->cod_empleado;
  }

  public function setCod_empleado($cod_empleado)
  {
    $this->cod_empleado = $cod_empleado;

    return $this;
  }

  public function getCod_usuario()
  {
    return $this->cod_usuario;
  }

  public function setCod_usuario($cod_usuario)
  {
    $this->cod_usuario = $cod_usuario;

    return $this;
  }

  public function getCed_empleado()
  {
    return $this->ced_empleado;
  }

  public function setCed_empleado($ced_empleado)
  {
    $this->ced_empleado = $ced_empleado;

    return $this;
  }

  public function getTelefono_empleado()
  {
    return $this->telefono_empleado;
  }

  public function setTelefono_empleado($telefono_empleado)
  {
    $this->telefono_empleado = $telefono_empleado;

    return $this;
  }

  public function getCorreo_empleado()
  {
    return $this->correo_empleado;
  }

  public function setCorreo_empleado($correo_empleado)
  {
    $this->correo_empleado = $correo_empleado;

    return $this;
  }
}
?>