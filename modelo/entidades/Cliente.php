<?php

class Cliente{
  private $cod_cliente;
  private $cod_usuario;
  private $nom_cliente;
  private $telefono_cliente;
  private $correo_cliente;
  private $direccion_cliente;
  private $habilitado;

  public function __construct($cod_cliente, $cod_usuario,$nom_cliente,$telefono_cliente, $correo_cliente,$direccion_cliente,$habilitado)
  {
    $this->cod_cliente=$cod_cliente;
    $this->cod_usuario=$cod_usuario;
    $this->nom_cliente=$nom_cliente;
    $this->telefono_cliente=$telefono_cliente;
    $this->correo_cliente=$correo_cliente;
    $this->direccion_cliente=$direccion_cliente;
    $this->habilitado=$habilitado;

  }
  

  public function getCod_cliente()
  {
    return $this->cod_cliente;
  }
  public function setCod_cliente($cod_cliente)
  {
    $this->cod_cliente = $cod_cliente;
  }


  public function getCod_usuario()
  {
    return $this->cod_usuario;
  }
  public function setCod_usuario($cod_usuario)
  {
    $this->cod_usuario = $cod_usuario;
  }

  
  public function getNom_cliente()
  {
    return $this->nom_cliente;
  } 
  public function setNom_cliente($nom_cliente)
  {
    $this->nom_cliente = $nom_cliente;
  }

  public function getTelefono_cliente()
  {
    return $this->telefono_cliente;
  }
  public function setTelefono_cliente($telefono_cliente)
  {
    $this->telefono_cliente = $telefono_cliente;
  }

  public function getCorreo_cliente()
  {
    return $this->correo_cliente;
  }
  public function setCorreo_cliente($correo_cliente)
  {
    $this->correo_cliente = $correo_cliente;
  }

  
  public function getDireccion_cliente()
  {
    return $this->direccion_cliente;
  }
  public function setDireccion_cliente($direccion_cliente)
  {
    $this->direccion_cliente = $direccion_cliente;
  }

  public function getHabilitado()
  {
    return $this->habilitado;
  } 
  public function setHabilitado($habilitado)
  {
    $this->habilitado = $habilitado;
  }
}
?>