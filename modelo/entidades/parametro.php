<?php

class Parametro{
    
  private $cod_parametro;
  private $nom_parametro;
  private $valor_num_parametro;
  private $valor_str_parametro;
    

public function __construct($cod_parametro,$nom_parametro,$valor_num_parametro, $valor_str_parametro)
{
    $this->cod_parametro=$cod_parametro;
    $this->nom_parametro=$nom_parametro;
    $this->valor_num_parametro=$valor_num_parametro;
    $this->valor_str_parametro=$valor_str_parametro;

}



  public function getCod_parametro()
  {
    return $this->cod_parametro;
  }
  public function setCod_parametro($cod_parametro)
  {
    $this->cod_parametro = $cod_parametro;

    return $this;
  }


  public function getNom_parametro()
  {
    return $this->nom_parametro;
  }
  public function setNom_parametro($nom_parametro)
  {
    $this->nom_parametro = $nom_parametro;

    return $this;
  }

  public function getValor_num_parametro()
  {
    return $this->valor_num_parametro;
  }
  public function setValor_num_parametro($valor_num_parametro)
  {
    $this->valor_num_parametro = $valor_num_parametro;

    return $this;
  }


  public function getValor_str_parametro()
  {
    return $this->valor_str_parametro;
  }
  public function setValor_str_parametro($valor_str_parametro)
  {
    $this->valor_str_parametro = $valor_str_parametro;

    return $this;
  }
}
?>