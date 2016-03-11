<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlTipo_Usuario
 *
 * @author kenyi
 */
class ControlTipo_Usuario {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarActividadxCod($codigo) {
        return $this->objD->listarActividadxCod($codigo);
    }

    public function listarActividad() {
        return $this->objD->listarActividad();
    }
    
    public function codAutActividad() {
        return $this->objD->codAutActividad();
    }
    
    public function registrarActividad($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarActividad($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarActividad($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarActividad($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
