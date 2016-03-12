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
    
    public function listarTipo_UsuarioxCod($codigo) {
        return $this->objD->listarTipo_UsuarioxCod($codigo);
    }

    public function listarTipo_Usuario() {
        return $this->objD->listarTipo_Usuario();
    }
    
    public function codAutTipo_Usuario() {
        return $this->objD->codAutTipo_Usuario();
    }
    
    public function registrarTipo_Usuario($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarTipo_Usuario($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarTipo_Usuario($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarTipo_Usuario($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
