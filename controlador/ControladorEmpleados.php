<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DAOEmpleado.php');

class ControladorEmpleados{

    private $Empleados;


    public function agregarRegistro(Empleado $nuevoRegistro)
    {
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Empleado $registroActualizar)
    {
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->listar();
    }

}

?>