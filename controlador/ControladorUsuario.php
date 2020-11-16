<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DaoUsuario.php');

class ControladorUsuario{

    private $Usuario;


    public function agregarRegistro(Empleado $nuevoRegistro)
    {
        $this->Usuario=new DaoUsuario();
        return $this->Usuario->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Empleado $registroActualizar)
    {
        $this->Usuario=new DaoUsuario();
        return $this->Usuario->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Usuario=new DaoUsuario();
        return $this->Usuario->listar();
    }

    public function cambiarEstadoPubli($id,$cod_estado){
        $this->Usuario=new DaoUsuario();
        return $this->Usuario->cambiarUsuarioPublicador($id, $cod_estado);
    }

    public function darUsuarioxCod($id){
        $this->Usuario=new DaoUsuario();
        return $this->Usuario->darUsuarioxCod1($id);
    }


}

?>