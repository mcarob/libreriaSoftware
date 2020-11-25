<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DAOEmpleado.php');

class ControladorEmpleados{

    private $Empleados;


    public function agregarRegistro(Empleado $nuevoRegistro)
    {
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->agregarRegistro($nuevoRegistro);
    }

    public function agregarEmpleado($nombre, $apellido, $correo, $telefono, $cedula)
    {
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->agregarRegistroEmpleado($nombre, $apellido, $correo, $telefono, $cedula);
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

    public function darEmplado($id){
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->darEmpleadoxCodUsu($id);
    }

    public function editarEmpelado($nombre, $correo, $telefono, $id, $contraActual, $contraNueva){
        $this->Empleados=new DaoEmpleado();
        return $this->Empleados->editarEmepladoProce($nombre, $telefono, $correo, $id, $contraActual, $contraNueva);
    }




   


}

?>