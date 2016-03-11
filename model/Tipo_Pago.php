<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Pago
 *
 * @author kenyi
 */
class Tipo_Pago {
    PRIVATE $NOMBRE;
    PRIVATE $ESTADO;
    PRIVATE $ID_TIPO_PAGO;
    
    function __construct($NOMBRE, $ESTADO, $ID_TIPO_PAGO) {
        $this->NOMBRE = $NOMBRE;
        $this->ESTADO = $ESTADO;
        $this->ID_TIPO_PAGO = $ID_TIPO_PAGO;
    }
    
    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_TIPO_PAGO() {
        return $this->ID_TIPO_PAGO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_TIPO_PAGO($ID_TIPO_PAGO) {
        $this->ID_TIPO_PAGO = $ID_TIPO_PAGO;
    }



}
