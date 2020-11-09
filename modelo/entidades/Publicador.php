<?php

class Publicador{
    
    private $codPublicador; 
    private $cod_usuario; 
    private $cedPublicador; 
    private $nomPublicador; 
    private $correoPublicador; 
    private $direccionPublicador; 
    private $ciudadPublicador; 
    private $paisPublicador; 
    private $telefonoPublicador; 
    


    public function __construct($codPublicador,$cod_usuario,$cedPublicador,$nomPublicador,$correoPublicador,$direccionPublicador,
    $ciudadPublicador,$paisPublicador,$telefonoPublicador)
    {
        $this->codPublicador = $codPublicador;
        $this->cod_usuario = $cod_usuario;
        $this->cedPublicador = $cedPublicador;
        $this->nomPublicador = $nomPublicador;
        $this->correoPublicador = $correoPublicador;
        $this->direccionPublicador = $direccionPublicador;
        $this->ciudadPublicador = $ciudadPublicador;
        $this->paisPublicador = $paisPublicador;
        $this->telefonoPublicador = $telefonoPublicador;

    }   




    /**
     * Get the value of codPublicador
     */ 
    public function getCodPublicador()
    {
        return $this->codPublicador;
    }

    /**
     * Set the value of codPublicador
     *
     * @return  self
     */ 
    public function setCodPublicador($codPublicador)
    {
        $this->codPublicador = $codPublicador;

        return $this;
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
     * Get the value of cedPublicador
     */ 
    public function getCedPublicador()
    {
        return $this->cedPublicador;
    }

    /**
     * Set the value of cedPublicador
     *
     * @return  self
     */ 
    public function setCedPublicador($cedPublicador)
    {
        $this->cedPublicador = $cedPublicador;

        return $this;
    }

    /**
     * Get the value of nomPublicador
     */ 
    public function getNomPublicador()
    {
        return $this->nomPublicador;
    }

    /**
     * Set the value of nomPublicador
     *
     * @return  self
     */ 
    public function setNomPublicador($nomPublicador)
    {
        $this->nomPublicador = $nomPublicador;

        return $this;
    }

    /**
     * Get the value of correoPublicador
     */ 
    public function getCorreoPublicador()
    {
        return $this->correoPublicador;
    }

    /**
     * Set the value of correoPublicador
     *
     * @return  self
     */ 
    public function setCorreoPublicador($correoPublicador)
    {
        $this->correoPublicador = $correoPublicador;

        return $this;
    }

    /**
     * Get the value of direccionPublicador
     */ 
    public function getDireccionPublicador()
    {
        return $this->direccionPublicador;
    }

    /**
     * Set the value of direccionPublicador
     *
     * @return  self
     */ 
    public function setDireccionPublicador($direccionPublicador)
    {
        $this->direccionPublicador = $direccionPublicador;

        return $this;
    }

    /**
     * Get the value of ciudadPublicador
     */ 
    public function getCiudadPublicador()
    {
        return $this->ciudadPublicador;
    }

    /**
     * Set the value of ciudadPublicador
     *
     * @return  self
     */ 
    public function setCiudadPublicador($ciudadPublicador)
    {
        $this->ciudadPublicador = $ciudadPublicador;

        return $this;
    }

    /**
     * Get the value of paisPublicador
     */ 
    public function getPaisPublicador()
    {
        return $this->paisPublicador;
    }

    /**
     * Set the value of paisPublicador
     *
     * @return  self
     */ 
    public function setPaisPublicador($paisPublicador)
    {
        $this->paisPublicador = $paisPublicador;

        return $this;
    }

    /**
     * Get the value of telefonoPublicador
     */ 
    public function getTelefonoPublicador()
    {
        return $this->telefonoPublicador;
    }

    /**
     * Set the value of telefonoPublicador
     *
     * @return  self
     */ 
    public function setTelefonoPublicador($telefonoPublicador)
    {
        $this->telefonoPublicador = $telefonoPublicador;

        return $this;
    }
}

?>