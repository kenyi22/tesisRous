<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Detalle_Venta
 *
 * @author kenyi
 */
class Detalle_Venta {
    PRIVATE $ID_DETALLE_VENTA;
    PRIVATE $ID_PRODUCTO;
    PRIVATE $CANTIDAD;
    PRIVATE $DESCRIPCION;
    PRIVATE $PRECIO_UNITARIO;
    PRIVATE $PRECIO_TOTAL;
    PRIVATE $ESTADO;
    PRIVATE $ID_VENTA;
    
    function __construct($ID_DETALLE_VENTA, $ID_PRODUCTO, $CANTIDAD, $DESCRIPCION, $PRECIO_UNITARIO, $PRECIO_TOTAL, $ESTADO, $ID_VENTA) {
        $this->ID_DETALLE_VENTA = $ID_DETALLE_VENTA;
        $this->ID_PRODUCTO = $ID_PRODUCTO;
        $this->CANTIDAD = $CANTIDAD;
        $this->DESCRIPCION = $DESCRIPCION;
        $this->PRECIO_UNITARIO = $PRECIO_UNITARIO;
        $this->PRECIO_TOTAL = $PRECIO_TOTAL;
        $this->ESTADO = $ESTADO;
        $this->ID_VENTA = $ID_VENTA;
    }
    
    function getID_DETALLE_VENTA() {
        return $this->ID_DETALLE_VENTA;
    }

    function getID_PRODUCTO() {
        return $this->ID_PRODUCTO;
    }

    function getCANTIDAD() {
        return $this->CANTIDAD;
    }

    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function getPRECIO_UNITARIO() {
        return $this->PRECIO_UNITARIO;
    }

    function getPRECIO_TOTAL() {
        return $this->PRECIO_TOTAL;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_VENTA() {
        return $this->ID_VENTA;
    }

    function setID_DETALLE_VENTA($ID_DETALLE_VENTA) {
        $this->ID_DETALLE_VENTA = $ID_DETALLE_VENTA;
    }

    function setID_PRODUCTO($ID_PRODUCTO) {
        $this->ID_PRODUCTO = $ID_PRODUCTO;
    }

    function setCANTIDAD($CANTIDAD) {
        $this->CANTIDAD = $CANTIDAD;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    function setPRECIO_UNITARIO($PRECIO_UNITARIO) {
        $this->PRECIO_UNITARIO = $PRECIO_UNITARIO;
    }

    function setPRECIO_TOTAL($PRECIO_TOTAL) {
        $this->PRECIO_TOTAL = $PRECIO_TOTAL;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_VENTA($ID_VENTA) {
        $this->ID_VENTA = $ID_VENTA;
    }



}
