<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Notificacion
 *
 * @author kenyi
 */
class Notificacion {
    PRIVATE $ID_NOTIFICACION;
    PRIVATE $LEIDO;
    PRIVATE $FECHA_HORA;
    PRIVATE $ESTADO;
    PRIVATE $ID_TIPO_NOTIFICACION;
    PRIVATE $ID_CARRITO_COMPRAS;
    PRIVATE $ID_ORDEN;
    
    function __construct($ID_NOTIFICACION, $LEIDO, $FECHA_HORA, $ESTADO, $ID_TIPO_NOTIFICACION, $ID_CARRITO_COMPRAS, $ID_ORDEN) {
        $this->ID_NOTIFICACION = $ID_NOTIFICACION;
        $this->LEIDO = $LEIDO;
        $this->FECHA_HORA = $FECHA_HORA;
        $this->ESTADO = $ESTADO;
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
        $this->ID_ORDEN = $ID_ORDEN;
    }
    
    function getID_NOTIFICACION() {
        return $this->ID_NOTIFICACION;
    }

    function getLEIDO() {
        return $this->LEIDO;
    }

    function getFECHA_HORA() {
        return $this->FECHA_HORA;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_TIPO_NOTIFICACION() {
        return $this->ID_TIPO_NOTIFICACION;
    }

    function getID_CARRITO_COMPRAS() {
        return $this->ID_CARRITO_COMPRAS;
    }

    function getID_ORDEN() {
        return $this->ID_ORDEN;
    }

    function setID_NOTIFICACION($ID_NOTIFICACION) {
        $this->ID_NOTIFICACION = $ID_NOTIFICACION;
    }

    function setLEIDO($LEIDO) {
        $this->LEIDO = $LEIDO;
    }

    function setFECHA_HORA($FECHA_HORA) {
        $this->FECHA_HORA = $FECHA_HORA;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_TIPO_NOTIFICACION($ID_TIPO_NOTIFICACION) {
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
    }

    function setID_CARRITO_COMPRAS($ID_CARRITO_COMPRAS) {
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
    }

    function setID_ORDEN($ID_ORDEN) {
        $this->ID_ORDEN = $ID_ORDEN;
    }



}
