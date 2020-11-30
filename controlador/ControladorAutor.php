<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/autorDAO.php');



class ControladorAutores{

    private $autor;


    public function agregarRegistro(Autor $nuevoRegistro)
    {
        $this->autor=new autorDAO();
        return $this->autor->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Autor $registroActualizar)
    {
        $this->autor=new autorDAO();
        return $this->autor->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->autor=new autorDAO();
        return $this->autor->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->autor=new autorDAO();
        return $this->autor->listar();
    }

}

?>