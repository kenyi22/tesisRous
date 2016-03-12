<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlVenta
 *
 * @author kenyi
 */
class ControlVenta {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarVentaxCod($codigo) {
        return $this->objD->listarAVentaxCod($codigo);
    }

    public function listarVenta() {
        return $this->objD->listarVenta();
    }
    
    public function codAutVenta() {
        return $this->objD->codAutVenta();
    }
    
    public function registraVenta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarVenta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarVenta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarVenta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
