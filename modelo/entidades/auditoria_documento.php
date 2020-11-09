<?php
    class auditoria_documento{
        private $cod_auditoria_documento;
        private $cod_existencia;
        private $cod_usuario_prestamo;
        private $cod_usuario_devolucion;
        private $fecha_auditoria;
        private $tipo_actualizacion;
        private $ip_actualizacion;

        public function function_construct($cod_auditoria_documento, $cod_existencia, $cod_usuario_prestamo, $fecha_auditoria, $tipo_actualizacion, $ip_actualizacion){
            $this->cod_auditoria_documento=$cod_auditoria_documento;
            $this->cod_existencia=$cod_existencia;
            $this->cod_usuario_prestamo=$cod_usuario_prestamo;
            $this->cod_usuario_devolucion=$cod_usuario_devolucion;
            $this->fecha_auditoria=$fecha_auditoria;
            $this->tipo_actualizacion=$tipo_actualizacion;
            $this->ip_actualizacion=$ip_actualizacion;

        }

        public function getCodAuditoriaDocumento(){
            return $this->cod_auditoria_documento;
        }
        public function setCodAuditoriaDocumento($cod_auditoria_documento){
            $this->cod_auditoria_documento = $cod_auditoria_documento;
        }

        public function getCodExistencia(){
            return $this->cod_existencia;
        }
        public function setCodExistencia($cod_existencia){
            $this->cod_existencia = $cod_existencia;
        }

        public function getCodUsuarioPrestamo(){
            return $this->cod_usuario_prestamo;
        }
        public function setCodUsuarioPrestamo($cod_usuario_prestamo){
            $this->cod_usuario_prestamo = $cod_usuario_prestamo;
        }

        public function getCodUsuarioDevolucion(){
            return $this->cod_usuario_devolucion;
        }
        public function setCodUsuarioDevolucion($cod_usuario_devolucion){
            $this->cod_usuario_devolucion = $cod_usuario_devolucion;
        }

        public function getFechaAuditoria(){
            return $this->fecha_auditoria;
        }
        public function setFechaAuditoria($fecha_auditoria){
            $this->fecha_auditoria = $fecha_auditoria;
        }

        public function getTipoActualizacion(){
            return $this->tipo_actualizacion;
        }
        public function setTipoActualizacion($tipo_actualizacion){
            $this->tipo_actualizacion = $tipo_actualizacion;
        }

        public function getIpActualizacion(){
            return $this->ip_actualizacion;
        }
        public function setIpActualizacion($ip_actualizacion){
            $this->ip_actualizacion = $ip_actualizacion;
        }

        
    }
?>