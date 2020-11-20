<?php

class Documento{

  private $cod_documento;
  private $cod_idioma;
  private $cod_tipo_documento;
  private $cod_tipo_presentacion;
  private $titulo_documento;
  private $fecha_publicacion;
  private $editorial_publicacion;
  private $codigo_isbn;
  private $informacion_paginas;
  private $informacion_congreso;
  private $informacion_ssn;
  private $informacion_bib;
  private $direccion_archivo;
  private $cod_publicador;
  private $direccion_portada;

  public function __construct($cod_documento,$cod_idioma, $cod_tipo_documento,
  $cod_tipo_presentacion,$titulo_documento,$fecha_publicacion,$editorial_publicacion,
  $codigo_isbn, $informacion_paginas,$informacion_congreso,$informacion_ssn, 
  $informacion_bib,$direccion_archivo,$cod_publicador,$direccion_portada)
  {
    $this->cod_documento=$cod_documento;
    $this->cod_idioma=$cod_idioma;
    $this->cod_tipo_documento=$cod_tipo_documento;
    $this->cod_tipo_presentacion=$cod_tipo_presentacion;
    $this->titulo_documento=$titulo_documento;
    $this->fecha_publicacion=$fecha_publicacion;
    $this->editorial_publicacion=$editorial_publicacion;
    $this->codigo_isbn=$codigo_isbn;
    $this->informacion_paginas=$informacion_paginas;
    $this->informacion_congreso=$informacion_congreso;
    $this->informacion_ssn=$informacion_ssn;
    $this->informacion_bib=$informacion_bib;
    $this->direccion_archivo=$direccion_archivo;
    $this->cod_publicador=$cod_publicador;
    $this->direccion_portada=$direccion_portada;
  }
  

  public function getCod_documento()
  {
    return $this->cod_documento;
  } 
  public function setCod_documento($cod_documento)
  {
    $this->cod_documento = $cod_documento;
  }
  
  public function getDireccion_portada()
  {
    return $this->direccion_portada;
  } 
  public function setDireccion_portada($direccion_portada)
  {
    $this->direccion_portada = $direccion_portada;
  }


   
  public function getCod_idioma()
  {
    return $this->cod_idioma;
  }
  public function setCod_idioma($cod_idioma)
  {
    $this->cod_idioma = $cod_idioma;
  }

  
  public function getCod_tipo_documento()
  {
    return $this->cod_tipo_documento;
  }  
  public function setCod_tipo_documento($cod_tipo_documento)
  {
    $this->cod_tipo_documento = $cod_tipo_documento;
  }

  
  public function getCod_tipo_presentacion()
  {
    return $this->cod_tipo_presentacion;
  }
  public function setCod_tipo_presentacion($cod_tipo_presentacion)
  {
    $this->cod_tipo_presentacion = $cod_tipo_presentacion;
  }

  
  public function getTitulo_documento()
  {
    return $this->titulo_documento;
  }
  public function setTitulo_documento($titulo_documento)
  {
    $this->titulo_documento = $titulo_documento;
  }

  
  public function getFecha_publicacion()
  {
    return $this->fecha_publicacion;
  }
  public function setFecha_publicacion($fecha_publicacion)
  {
    $this->fecha_publicacion = $fecha_publicacion;
  }

  
  public function getEditorial_publicacion()
  {
    return $this->editorial_publicacion;
  }
  public function setEditorial_publicacion($editorial_publicacion)
  {
    $this->editorial_publicacion = $editorial_publicacion;
  }

  
  public function getCodigo_isbn()
  {
    return $this->codigo_isbn;
  }
  public function setCodigo_isbn($codigo_isbn)
  {
    $this->codigo_isbn = $codigo_isbn;
  }


  public function getInformacion_paginas()
  {
    return $this->informacion_paginas;
  }
  public function setInformacion_paginas($informacion_paginas)
  {
    $this->informacion_paginas = $informacion_paginas;
  }

   
  public function getInformacion_congreso()
  {
    return $this->informacion_congreso;
  }
  public function setInformacion_congreso($informacion_congreso)
  {
    $this->informacion_congreso = $informacion_congreso;
  }


  public function getInformacion_ssn()
  {
    return $this->informacion_ssn;
  }
  public function setInformacion_ssn($informacion_ssn)
  {
    $this->informacion_ssn = $informacion_ssn;
  }

  
  public function getInformacion_bib()
  {
    return $this->informacion_bib;
  }
  public function setInformacion_bib($informacion_bib)
  {
    $this->informacion_bib = $informacion_bib;
  }

  
  public function getDireccion_archivo()
  {
    return $this->direccion_archivo;
  }
  public function setDireccion_archivo($direccion_archivo)
  {
    $this->direccion_archivo = $direccion_archivo;
  }


  public function getCod_publicador()
  {
    return $this->cod_publicador;
  }
  public function setCod_publicador($cod_publicador)
  {
    $this->cod_publicador = $cod_publicador;
  }
}
?>