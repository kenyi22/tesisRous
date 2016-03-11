<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stock_Producto
 *
 * @author kenyi
 */
class Stock_Producto {
    PRIVATE $ID_STOCK_PRODUCTO;
    PRIVATE $CANTIDAD;
    PRIVATE $ESTADO;
    
    function __construct($ID_STOCK_PRODUCTO, $CANTIDAD, $ESTADO) {
        $this->ID_STOCK_PRODUCTO = $ID_STOCK_PRODUCTO;
        $this->CANTIDAD = $CANTIDAD;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_STOCK_PRODUCTO() {
        return $this->ID_STOCK_PRODUCTO;
    }

    function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_STOCK_PRODUCTO($ID_STOCK_PRODUCTO) {
        $this->ID_STOCK_PRODUCTO = $ID_STOCK_PRODUCTO;
    }

    function setCANTIDAD($CANTIDAD) {
        $this->CANTIDAD = $CANTIDAD;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



           
}
