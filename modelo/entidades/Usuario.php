<?php

class Usuario{



    private $cod_usuario;
    private $cod_tipo_usuario;
    private $user_usuario;
    private $pass_usuario;
    private $intentos_usuario;
    private $user_registro_date;
    private $nuevo_usuario;
    private $codigo_verificacion;
    private $estado_usuario;

  public function __construct($cod_usuario, $cod_tipo_usuario, $user_usuario, $pass_usuario, $intentos_usuario, $user_registro_date, $nuevo_usuario, $codigo_verificacion, $estado_usuario)
  {
        $this->cod_usuario = $cod_usuario;
        $this->cod_tipo_usuario = $cod_tipo_usuario;
        $this->user_usuario = $user_usuario;
        $this->pass_usuario = $pass_usuario;
        $this->intentos_usuario = $intentos_usuario;
        $this->user_registro_date= $user_registro_date;
        $this->nuevo_usuario = $nuevo_usuario ;
        $this->codigo_verificacion = $codigo_verificacion;
        $this->estado_usuario = $estado_usuario;
    }

  



}

?>