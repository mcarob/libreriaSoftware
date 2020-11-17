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

    public function setUser($usuario){
        $query=$this->connect()->prepare('SELECT * FROM usuario WHERE USER_USUARIO=:user');
        $query->execute(['user'=>$usuario]);
        if($query->rowCount()){
            foreach ($query as $kk) {
                $thipou=$kk['COD_TIPO_USUARIO'];
                $cod_usuario=$kk['COD_USUARIO'];
                $this->codigo=$cod_usuario;
                $this->tipoUsuario= $thipou;
                $this->estado_empresa=$kk['VALIDADO'];
                if($thipou==1 || $thipou==4){
                    $query=$this->connect()->prepare('SELECT * FROM administrador WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                        $this->nombreUsuario=$kk['NOMBRE_ADMINISTRADOR']." ".$kk['APELLIDO_ADMINISTRADOR'];
                        $this->correo=$kk['CORREO_ADMINISTRADOR'];
                    }
                }else if($thipou==2){
                    $query=$this->connect()->prepare('SELECT * FROM estudiante WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                        $this->nombreUsuario=$kk['NOMBRE_ESTUDIANTE']." ".$kk['APELLIDO_ESTUDIANTE'];
                        $this->correo=$kk['CORREO_ESTUDIANTE'];
                    }
                }else {
                    $query=$this->connect()->prepare('SELECT * FROM infoempresa_contacto WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                        $this->nombreUsuario=$kk['RAZON_SOCIAL'];
                        $this->correo=$kk['CORREO_CONTACTO'];
                        $this->contacto_empresa=$kk['NOM_CONTACTO']." ".$kk['APELLIDO_CONTACTO'];
                        $this->codigoEmpresa=$kk['COD_EMPRESA'];
                    }
                }
            }
        }
    }


}

?>