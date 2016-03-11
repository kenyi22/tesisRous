<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Detalle_Carrito_Compras
 *
 * @author kenyi
 */
class Detalle_Carrito_Compras {
    PRIVATE $ESTADO;
    PRIVATE $ID_CARRITO_COMPRAS;
    PRIVATE $ID_PRODUCTO;
    PRIVATE $CANTIDAD;
    
    function __construct($ESTADO, $ID_CARRITO_COMPRAS, $ID_PRODUCTO, $CANTIDAD) {
        $this->ESTADO = $ESTADO;
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
        $this->ID_PRODUCTO = $ID_PRODUCTO;
        $this->CANTIDAD = $CANTIDAD;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_CARRITO_COMPRAS() {
        return $this->ID_CARRITO_COMPRAS;
    }

    function getID_PRODUCTO() {
        return $this->ID_PRODUCTO;
    }

    function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_CARRITO_COMPRAS($ID_CARRITO_COMPRAS) {
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
    }

    function setID_PRODUCTO($ID_PRODUCTO) {
        $this->ID_PRODUCTO = $ID_PRODUCTO;
    }

    function setCANTIDAD($CANTIDAD) {
        $this->CANTIDAD = $CANTIDAD;
    }


}
