<?php

class Autores_documento{
  private $cod_autores_documento;
  private $cod_documento;
  private $cod_autor;

  public function __construct($cod_autores_documento, $cod_documento,$cod_autor)
  {
    $this->cod_autores_documento=$cod_autores_documento;
    $this->cod_documento=$cod_documento;
    $this->cod_autor=$cod_autor;

  }
  

  public function getCodAutoresDocumento()
  {
    return $this->cod_autores_documento;
  } 
  public function setCodAutoresDocumento($cod_autores_documento)
  {
    $this->cod_autores_documento = $cod_autores_documento;
  }

 
  public function getCodDocumento()
  {
    return $this->cod_documento;
  }
  public function setCodDocumento($cod_documento)
  {
    $this->cod_documento = $cod_documento;
  }


  public function getCodAutor()
  {
    return $this->cod_autor;
  }
  public function setCodAutor($cod_autor)
  {
    $this->cod_autor = $cod_autor;
  }
}
?>