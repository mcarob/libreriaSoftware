<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/entidades/autor.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/db.php');

class autorDAO extends DB  implements dao_interface
{
    
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con =$this->connect();
    }
    

    public function agregarRegistro(autor $nuevoRegistro){
        
        $query = "INSERT INTO autor (cod_autor,nombre_autor,
        apellido_autor,fecha_nacimiento,biografia_autor) values (?,?,?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([
                $nuevoRegistro->getCodAutor(), 
                $nuevoRegistro->getNombreAutor(), 
                $nuevoRegistro->getApellidoAutor(),
                $nuevoRegistro->getFechaNacimiento(), 
                $nuevoRegistro->getBiografiaAutor()
        ]);
        return $respuesta;
    }


    public function actualizarRegistro(autor $registroActualizar){
        $query = "UPDATE autor SET nombre_autor=?,apellido_autor=?,
        fecha_nacimiento=?,biografia_autor=? WHERE cod_autor=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCodAutor(), 
                $registroActualizar->getNombreAutor(),
                $registroActualizar->getApellidoAutor(),
                $registroActualizar->getFechaNacimiento(), 
                $registroActualizar->getBiografiaAutor()

        ]);
        return $respuesta;

    }
    
    public function eliminarRegistro($idRegistro){
        $query = "DELETE FROM autor WHERE cod_autor=?";
        $respuesta = $this->con->prepare($query)->execute([$idRegistro]);
        return $respuesta;
    }

    public function listar(){
        $query = $this->con->prepare("SELECT * FROM autor");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
}
