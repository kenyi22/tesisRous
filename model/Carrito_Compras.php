<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrito_Compras
 *
 * @author kenyi
 */
class Carrito_Compras {
    
    PRIVATE $ID_CARRITO_COMPRAS;
    PRIVATE $FECHA;
    PRIVATE $CANTIDADTOTAL;
    PRIVATE $ESTADO;
    PRIVATE $ID_PERSONA;
    
    function __construct($ID_CARRITO_COMPRAS, $FECHA, $CANTIDADTOTAL, $ESTADO, $ID_PERSONA) {
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
        $this->FECHA = $FECHA;
        $this->CANTIDADTOTAL = $CANTIDADTOTAL;
        $this->ESTADO = $ESTADO;
        $this->ID_PERSONA = $ID_PERSONA;
    }
    
    function getID_CARRITO_COMPRAS() {
        return $this->ID_CARRITO_COMPRAS;
    }

    function getFECHA() {
        return $this->FECHA;
    }

    function getCANTIDADTOTAL() {
        return $this->CANTIDADTOTAL;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_PERSONA() {
        return $this->ID_PERSONA;
    }

    function setID_CARRITO_COMPRAS($ID_CARRITO_COMPRAS) {
        $this->ID_CARRITO_COMPRAS = $ID_CARRITO_COMPRAS;
    }

    function setFECHA($FECHA) {
        $this->FECHA = $FECHA;
    }

    function setCANTIDADTOTAL($CANTIDADTOTAL) {
        $this->CANTIDADTOTAL = $CANTIDADTOTAL;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_PERSONA($ID_PERSONA) {
        $this->ID_PERSONA = $ID_PERSONA;
    }



}
