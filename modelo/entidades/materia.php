<?php

class Materia_materia{
    
  private $cod_materia;
  private $nom_materia;
    
public function __construct($cod_materia, $nom_materia)
{
    $this->cod_materia=$cod_materia;
    $this->nom_materia=$nom_materia;
}

  public function getCod_materia()
  {
    return $this->cod_materia;
  }

  public function setCod_materia($cod_materia)
  {
    $this->cod_materia = $cod_materia;

    return $this;
  }

  public function getNom_materia()
  {
    return $this->nom_materia;
  }

  public function setNom_materia($nom_materia)
  {
    $this->nom_materia = $nom_materia;

    return $this;
  }
}
?>