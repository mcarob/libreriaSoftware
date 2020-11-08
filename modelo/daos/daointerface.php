<?php

interface dao_interface{
/** 
 * metodos de CRUD
 * implementar en todos los daos para implementar los metodos de crear / actualizar / listar / eliminar
 * 
 */
    public function agregarRegistro($nuevoRegistro);
    public function actualizarRegistro($registroActualizar);
    public function listar();
    public function eliminarRegistro($idRegistro);

}
?>