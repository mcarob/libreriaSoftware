<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/ClienteDAO.php');

class ControladorCliente{

    private $cliente;


    public function agregarRegistro(Cliente $nuevoRegistro)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Cliente $registroActualizar)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->actualizarRegistro($registroActualizar);
    }

    public function eliminarRegistro($idRegistro)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->eliminarRegistro($idRegistro);
    }

    public function listar()
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->listar();
    }

    public function devolverCliente($codigo_usuario)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->devolverCliente($codigo_usuario);
    }

    public function cantidadPrestamos($codigoCliente)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->cantidadPrestamos($codigoCliente);
    }

}

?>