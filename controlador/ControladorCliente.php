<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/ClienteDAO.php');

class ControladorCliente{

    private $cliente;


    public function agregarRegistroPlataforma(Cliente $nuevoRegistro,$pass)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->agregarRegistroPlataforma($nuevoRegistro,$pass);
    }

    public function agregarRegistro(Cliente $nuevoRegistro)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->agregarRegistro($nuevoRegistro);
    }

    public function agregarCliente($nombre,$apellido, $correo, $telefono, $direccion)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->agregarCl($nombre,$apellido,$correo, $telefono, $direccion);
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

    public function devolverClientexUser($user)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->devolverClienteXU($user);
    }

    public function cantidadPrestamos($codigoCliente)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->cantidadPrestamos($codigoCliente);
    }

    public function listarPrestamosXcliente($codigoCliente)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->listarPrestamosXcliente($codigoCliente);
    }

    public function listarPrestamosDXcliente($codigoCliente)
    {
        $this->cliente=new ClienteDAO();
        return $this->cliente->listarPrestamosDXcliente($codigoCliente);
    }


}

?>