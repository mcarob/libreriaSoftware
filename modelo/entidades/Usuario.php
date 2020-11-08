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



    /**
     * Get the value of cod_usuario
     */ 
    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Set the value of cod_usuario
     *
     * @return  self
     */ 
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

    /**
     * Get the value of cod_tipo_usuario
     */ 
    public function getCod_tipo_usuario()
    {
        return $this->cod_tipo_usuario;
    }

    /**
     * Set the value of cod_tipo_usuario
     *
     * @return  self
     */ 
    public function setCod_tipo_usuario($cod_tipo_usuario)
    {
        $this->cod_tipo_usuario = $cod_tipo_usuario;

        return $this;
    }

    /**
     * Get the value of user_usuario
     */ 
    public function getUser_usuario()
    {
        return $this->user_usuario;
    }

    /**
     * Set the value of user_usuario
     *
     * @return  self
     */ 
    public function setUser_usuario($user_usuario)
    {
        $this->user_usuario = $user_usuario;

        return $this;
    }

    /**
     * Get the value of user_registro_date
     */ 
    public function getUser_registro_date()
    {
        return $this->user_registro_date;
    }

    /**
     * Set the value of user_registro_date
     *
     * @return  self
     */ 
    public function setUser_registro_date($user_registro_date)
    {
        $this->user_registro_date = $user_registro_date;

        return $this;
    }

    /**
     * Get the value of pass_usuario
     */ 
    public function getPass_usuario()
    {
        return $this->pass_usuario;
    }

    /**
     * Set the value of pass_usuario
     *
     * @return  self
     */ 
    public function setPass_usuario($pass_usuario)
    {
        $this->pass_usuario = $pass_usuario;

        return $this;
    }

    /**
     * Get the value of intentos_usuario
     */ 
    public function getIntentos_usuario()
    {
        return $this->intentos_usuario;
    }

    /**
     * Set the value of intentos_usuario
     *
     * @return  self
     */ 
    public function setIntentos_usuario($intentos_usuario)
    {
        $this->intentos_usuario = $intentos_usuario;

        return $this;
    }

    /**
     * Get the value of nuevo_usuario
     */ 
    public function getNuevo_usuario()
    {
        return $this->nuevo_usuario;
    }

    /**
     * Set the value of nuevo_usuario
     *
     * @return  self
     */ 
    public function setNuevo_usuario($nuevo_usuario)
    {
        $this->nuevo_usuario = $nuevo_usuario;

        return $this;
    }

    /**
     * Set the value of codigo_verificacion
     *
     * @return  self
     */ 
    public function setCodigo_verificacion($codigo_verificacion)
    {
        $this->codigo_verificacion = $codigo_verificacion;

        return $this;
    }

    /**
     * Get the value of codigo_verificacion
     */ 
    public function getCodigo_verificacion()
    {
        return $this->codigo_verificacion;
    }




    /**
     * Get the value of estado_usuario
     */ 
    public function getEstado_usuario()
    {
        return $this->estado_usuario;
    }

    /**
     * Set the value of estado_usuario
     *
     * @return  self
     */ 
    public function setEstado_usuario($estado_usuario)
    {
        $this->estado_usuario = $estado_usuario;

        return $this;
    }
}

?>