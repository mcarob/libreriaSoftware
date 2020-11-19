<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/Usuario.php');

class DaoUsuario extends DB implements dao_interface
{

    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro($nuevoRegistro)
    {
    }

    public function actualizarRegistro($registroActualizar)
    {
    }
    public function listar()
    {
        $query = "select * from usuario";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Usuario($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6], $key[7], $key[8]);
        }
        return $usuarios;
    }
    public function eliminarRegistro($idRegistro)
    {
    }




    public function validarUsuario($cod_usuario)
    {
        $query = "UPDATE usuario SET estado_usuario=4 WHERE cod_usuario=?";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([$cod_usuario]);
    }

    public function darUsuario($user_usuario)
    {
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE USER_USUARIO=?');
        $query->execute([$user_usuario]);
        if ($query->rowCount()) {
            $key = $query->fetchAll();
            return new Usuario($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6], $key[7], $key[8]);
        } else {
            return null;
        }
    }

    public function darUsuarioxCod1($id)
    {
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE cod_usuario=?');
        $query->execute([$id]);
        if ($query->rowCount()) {
            $key = $query->fetch();
            return new Usuario($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6], $key[7], $key[8]);
        } else {
            return null;
        }
    }


    public function cambiarUsuarioPublicador($idUsu, $estado_usu)
    {

        // 1->Se registro
        // 2->Ya puso el cod de verificación  
        // 3->Esperando aprobación




        
        // 4->Ya lo acepto el admi -> Activo
        // 5->Inactivo
        // 6->Rechazado
        $query = "UPDATE usuario SET estado_usuario=" . $estado_usu . "where cod_usuario=" . $idUsu;
        $sentencia = $this->con->prepare($query);
        return $sentencia->execute([]);
    }

    public function validarUsuario1($cod_usuario)
    {
        $query = "UPDATE usuario SET estado_usuario=1 WHERE cod_usuario=?";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([$cod_usuario]);
    }

    public function darUsuarioUser($user_usuario)
    {
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE USER_USUARIO=?');
        $query->execute([$user_usuario]);
        if ($query->rowCount()) {
            $key = $query->fetchAll()[0];
            return new Usuario($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6], $key[7], $key[8]);
        } else {
            return null;
        }
    }

    public function validarContraseña($id,$contra)
    { 
        $sentencia = $this->con->prepare("SELECT * from usuario where cod_usuario=? and pass_usuario=?");
        $sentencia->execute([$id,md5($contra)]);
        $number_of_rows = $sentencia->fetchAll();
        return $number_of_rows;
    }

    public function cambiarContraseña($codigo,$pass)
    {
        $pass2 = md5($pass);
        $sentencia = $this->con->prepare("UPDATE usuario SET pass_usuario='".$pass2."' WHERE cod_usuario =".$codigo);
        $res=$sentencia->execute();
        return $res;
    }

   

}
