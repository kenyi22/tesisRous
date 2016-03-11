<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venta
 *
 * @author kenyi
 */
class Venta {
    PRIVATE $ID_VENTA;
    PRIVATE $NUMERO;
    PRIVATE $FECHA_HORA;
    PRIVATE $IGV;
    PRIVATE $SUBTOTAL;
    PRIVATE $TOTAL;
    PRIVATE $ESTADO;
    PRIVATE $ID_CARRITO_COMPRAS;
    PRIVATE $ID_ORDEN;
    
    function __construct($ID_VENTA, $NUMERO, $FECHA_HORA, $IGV, $SUBTOTAL, $TOTAL, $ESTADO, $ID_CARRITO_COMPRAS, $ID_ORDEN) {
        $this->ID_VENTA = $ID_VENTA;
        $this->NUMERO = $NUMERO;
        $this->FECHA_HORA = $FECHA_HORA;
        $this->IGV = $IGV;
        $this->SUBTOTAL = $SUBTOTAL;
        $this->TOTAL = $TOTAL;
        $this->ESTADO = $ESTADO;
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
        $this->ID_ORDEN = $ID_ORDEN;
    }
    
    function getID_VENTA() {
        return $this->ID_VENTA;
    }

    function getNUMERO() {
        return $this->NUMERO;
    }

    function getFECHA_HORA() {
        return $this->FECHA_HORA;
    }

    function getIGV() {
        return $this->IGV;
    }

    function getSUBTOTAL() {
        return $this->SUBTOTAL;
    }

    function getTOTAL() {
        return $this->TOTAL;
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

    function setID_VENTA($ID_VENTA) {
        $this->ID_VENTA = $ID_VENTA;
    }

    function setNUMERO($NUMERO) {
        $this->NUMERO = $NUMERO;
    }

    function setFECHA_HORA($FECHA_HORA) {
        $this->FECHA_HORA = $FECHA_HORA;
    }

    function setIGV($IGV) {
        $this->IGV = $IGV;
    }

    function setSUBTOTAL($SUBTOTAL) {
        $this->SUBTOTAL = $SUBTOTAL;
    }

    function setTOTAL($TOTAL) {
        $this->TOTAL = $TOTAL;
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
