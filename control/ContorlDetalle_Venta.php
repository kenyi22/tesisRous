<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContorlDetalle_Venta
 *
 * @author kenyi
 */
class ContorlDetalle_Venta {
   function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarDetalle_VentaxCod($codigo) {
        return $this->objD->listarDetalle_VentaxCod($codigo);
    }

    public function listarDetalle_Venta() {
        return $this->objD->listarDetalle_Venta();
    }
    
    public function codAutDetalle_Venta() {
        return $this->objD->codAutDetalle_Venta();
    }
    
    public function registrarDetalle_Venta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarDetalle_Venta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarDetalle_Venta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarDetalle_Venta($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
