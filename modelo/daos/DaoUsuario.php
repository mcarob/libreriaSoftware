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

    public function darUsuario($cod){
        $query = "SELECT * from usuario where cod_usuario=".$cod;
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        return $sentencia->fetch();
    }

    public function cambiarUsuarioPublicador($idUsu, $estado_usu){

        // 1->Se registro
        // 2->Ya puso el cod de verificación  
        // 3->Esperando aprobación
        // 4->Ya lo acepto el admi -> Activo
        // 5->Inactivo
        // 6->Rechazado
        $query = "UPDATE usuario SET estado_usuario=".$estado_usu."where cod_usuario=".$idUsu;
        $sentencia = $this->con->prepare($query);
        return $sentencia->execute([]);
    }

}
