<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlDetalle_Carrito_Compras
 *
 * @author kenyi
 */
class ControlDetalle_Carrito_Compras {
   function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarDetalle_Carrito_ComprasxCod($codigo) {
        return $this->objD->listarDetalle_Carrito_ComprasxCod($codigo);
    }

    public function listarDetalle_Carrito_Compras() {
        return $this->objD->listarDetalle_Carrito_Compras();
    }
    
    public function codAutDetalle_Carrito_Compras() {
        return $this->objD->codAutDetalle_Carrito_Compras();
    }
    
    public function registrarDetalle_Carrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarDetalle_Carrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarDetalle_Carrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarDetalle_Carrito_Compras($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
