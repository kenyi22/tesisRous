<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ordenes
 *
 * @author kenyi
 */
class Ordenes {
    PRIVATE $ESTADO;
    PRIVATE $ID_CARRITO_COMPRAS;
    PRIVATE $ID_ORDEN;
    
    function __construct($ESTADO, $ID_CARRITO_COMPRAS, $ID_ORDEN) {
        $this->ESTADO = $ESTADO;
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
        $this->ID_ORDEN = $ID_ORDEN;
    }
    
    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_CARRITO_COMPRAS() {
        return $this->ID_CARRITO_COMPRAS;
    }

    function getID_ORDEN() {
        return $this->ID_ORDEN;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_CARRITO_COMPRAS($ID_CARRITO_COMPRAS) {
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
    }

    function setID_ORDEN($ID_ORDEN) {
        $this->ID_ORDEN = $ID_ORDEN;
    }



}
