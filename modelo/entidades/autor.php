<?php
    class autor{
        private $cod_autor;
        private $nombre_autor;
        private $apellido_autor;
        private $fecha_nacimiento;
        private $biografia_autor;

        public function_construct($cod_autor,$nombre_autor,$apellido_autor, $fecha_nacimiento,$biografia_autor ){
            $this->cod_autor=$cod_autor;
            $this->nombre_autor=$nombre_autor;
            $this->apellido_autor=$apellido_autor;
            $this->fecha_nacimiento=$fecha_nacimiento;
            $this->biografia_autor=$biografia_autor;
        }

        public function getCodAutor(){
            return $this->cod_autor;
        }
        public function setCodAutor($cod_autor){
            $this->cod_autor=$cod_autor;
        }

        public function getNombreAutor(){
            return $this->nombre_autor;
        }
        public function setNombreAutor($nombre_autor){
            $this->nombre_autor=$nombre_autor;
        }

        public function getApellidoAutor(){
            return $this->apellido_autor;
        }
        public function setApellidoAutor($apellido_autor){
            $this->apellido_autor=$apellido_autor;
        }

        public function getFechaNacimiento(){
            return $this->fecha_nacimiento;
        }
        public function setFechaNacimiento($fecha_nacimiento){
            $this->fecha_nacimiento=$fecha_nacimiento;
        }

        public function getBiografiaAutor(){
            return $this->biografia_autor;
        }
        public function setBiografiaAutor($biografia_autor){
            $this->biografia_autor=$biografia_autor;
        }

    }
?>