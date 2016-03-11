<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pago
 *
 * @author kenyi
 */
class Pago {
    PRIVATE $ID_PAGO;
    PRIVATE $ID_VENTA;
    PRIVATE $ID_TIPO_PAGO;
    PRIVATE $FECHA_PAGO;
    PRIVATE $MONTO;
    PRIVATE $ESTADO;
    
    function __construct($ID_PAGO, $ID_VENTA, $ID_TIPO_PAGO, $FECHA_PAGO, $MONTO, $ESTADO) {
        $this->ID_PAGO = $ID_PAGO;
        $this->ID_VENTA = $ID_VENTA;
        $this->ID_TIPO_PAGO = $ID_TIPO_PAGO;
        $this->FECHA_PAGO = $FECHA_PAGO;
        $this->MONTO = $MONTO;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_PAGO() {
        return $this->ID_PAGO;
    }

    function getID_VENTA() {
        return $this->ID_VENTA;
    }

    function getID_TIPO_PAGO() {
        return $this->ID_TIPO_PAGO;
    }

    function getFECHA_PAGO() {
        return $this->FECHA_PAGO;
    }

    function getMONTO() {
        return $this->MONTO;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_PAGO($ID_PAGO) {
        $this->ID_PAGO = $ID_PAGO;
    }

    function setID_VENTA($ID_VENTA) {
        $this->ID_VENTA = $ID_VENTA;
    }

    function setID_TIPO_PAGO($ID_TIPO_PAGO) {
        $this->ID_TIPO_PAGO = $ID_TIPO_PAGO;
    }

    function setFECHA_PAGO($FECHA_PAGO) {
        $this->FECHA_PAGO = $FECHA_PAGO;
    }

    function setMONTO($MONTO) {
        $this->MONTO = $MONTO;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}
