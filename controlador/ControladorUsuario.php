<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DaoUsuario.php');

class ControladorUsuario{

    private $Usuario;

    private $tipoUsuario;
    private $nombreUsuario;
    private $correo;
    private $cedula;
    private $codigo;


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
                if($thipou==1){
                    $query=$this->connect()->prepare('SELECT * FROM administrador WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                        $this->nombreUsuario=$kk['nom_administrador'];
                        $this->correo=$kk['correo_administrador'];
                    }
                }else if($thipou==2){
                    $query=$this->connect()->prepare('SELECT * FROM empleado WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                        $this->nombreUsuario=$kk['nom_empleado'];
                        $this->correo=$kk['correo_empleado'];
                        $this->cedula=$kk['ced_empleado'];
                    }
                }else if($thipou==3){
                    $query=$this->connect()->prepare('SELECT * FROM publicador WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                       $this->nombreUsuario=$kk['nom_publicador']." ".$kk['ced_empleado'];
                       $this->correo=$kk['correo_empleado'];
                       $this->cedula=$kk['ced_publicador'];
                    }
                }else {
                    $query=$this->connect()->prepare('SELECT * FROM cliente WHERE COD_USUARIO=:id');
                    $query->execute(['id'=>$cod_usuario]);
                    foreach ($query as $kk) {
                        $this->nombreUsuario=$kk['nom_cliente'];
                        $this->correo=$kk['correo_cliente'];
                        $this->cedula=$kk['ced_publicador'];
                    }
                }
            }
        }
    }

    public function validarContraseña($id,$contra)
    {
        $this->usuario=new UsuarioDAO();
        return $this->usuario->validarContraseña($id,$contra);
    }

    public function cambiarContraseña($codigo,$pass)
    {
        $this->usuario=new UsuarioDAO();
        return $this->usuario->cambiarContraseña($codigo,$pass);
    }



    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        return $this->codigo = $codigo;
    }
}

?>