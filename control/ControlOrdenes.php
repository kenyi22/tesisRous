<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlOrdenes
 *
 * @author kenyi
 */
class ControlOrdenes {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarOrdenesxCod($codigo) {
        return $this->objD->listarOrdenesxCod($codigo);
    }

    public function listarOrdenes() {
        return $this->objD->listarOrdenes();
    }
    
    public function codAutOrdenes() {
        return $this->objD->codAutOrdenes();
    }
    
    public function registrarOrdenes($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarOrdenes($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarOrdenes($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarOrdenes($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
