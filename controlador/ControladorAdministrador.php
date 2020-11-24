<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/administradorDAO.php');

class ControladorAdministrador{

    private $Admi;
    public function darAdmi($id){
        $this->Admi=new administradorDAO();
        return $this->Admi->darAdmixcodUsu($id);
    }
    
    
}

?>