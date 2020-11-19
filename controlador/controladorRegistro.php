<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/user_Sesion.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/daos/DaoUsuario.php');


class ControladorRegistro{

    private  $usuario;
    private $dao_usuario;

    public function __construct()
    {
        $this->dao_usuario= new DaoUsuario();
    }

  

    /**
     * el metodo recibe por parametro un codigo, que es el codigo del usuario al que se le va a cambiar el estado de validado
     * 
     */
    public function cambiarEstadoValidado($cod_cambiar){
         $this->dao_usuario->validarUsuario($cod_cambiar);
    }

    public function darUsuario($user_usuario){
        $variable=$this->dao_usuario->darUsuarioUser($user_usuario);
        if($variable==null){
            return null;
        }else{
            $this->usuario=$variable;
            return  $variable;
        }

    }

    /**
     * Get the value of cod_especial
     */ 
    public function getCod_especial()
    {
        return $this->cod_especial;
    }

    /**
     * Get the value of nombre_usuario
     */ 
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get the value of verificacion
     */ 
    public function getVerificacion()
    {
        return $this->verificacion;
    }

    /**
     * Get the value of correo_usuario
     */ 
    public function getCorreo_usuario()
    {
        return $this->correo_usuario;
    }

    /**
     * Get the value of tipo_usuario
     */ 
    public function getTipo_usuario()
    {
        return $this->tipo_usuario;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }
}
?>