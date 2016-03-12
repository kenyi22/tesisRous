<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlCarrito_Compras
 *
 * @author kenyi
 */
class ControlCarrito_Compras {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarCarrito_ComprasxCod($codigo) {
        return $this->objD->listarCarrito_ComprasxCod($codigo);
    }

    public function listarCarrito_Compras() {
        return $this->objD->listarCarrito_Compras();
    }
    
    public function codAutCarrito_Compras() {
        return $this->objD->codAutCarrito_Compras();
    }
    
    public function registrarCarrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarCarrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarCarrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarCarrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
