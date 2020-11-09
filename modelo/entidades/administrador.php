<?php
    class administrador{
        private $cod_administrador;
        private $cod_usuario;
        private $nom_administrador;
        private $telefono_administrador;
        private $correo_administrador;

        public function_construct($cod_administrador, $cod_usuario, $nom_administrador, $telefono_administrador, $correo_administrador){
            $this->cod_administrador=$cod_administrador;
            $this->cod_usuario=$cod_usuario;
            $this->nom_administrador=$nom_administrador;
            $this->telefono_administrador=$telefono_administrador;
            $this->correo_administrador->$correo_administrador;
        }

        public function getCodAdministrador(){
            return $this->cod_administrador;
        }
        public function setCodAdministrador($cod_administrador){
            $this->cod_administrador = $cod_administrador;
        }

        public function getCodUsuario(){
            return $this->cod_usuario;
        }
        public function setCodUsuario($cod_usuario){
            $this->cod_usuario = $cod_usuario;
        }

        public function getNomAdministrador(){
            return $this->nom_administrador;
        }
        public function setNomAdministrador($nom_administrador){
            $this->nom_administrador = $nom_administrador;
        }

        public function getTelefonoAdministrador(){
            return $this->telefono_administrador;
        }
        public function setTelefonoAdministrador($telefono_administrador){
            $this->telefono_administrador = $telefono_administrador;
        }

        public function getCorreoAdministrador(){
            return $this->correo_administrador;
        }
        public function setCorreoAdministrador($correo_administrador){
            $this->correo_administrador = $correo_administrador;
        }





    }
?>