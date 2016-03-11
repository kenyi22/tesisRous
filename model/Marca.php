<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Marca
 *
 * @author kenyi
 */
class Marca {
    PRIVATE $DESCRIPCION;
    PRIVATE $ESTADO;
    PRIVATE $ID_MARCA;
    
    function __construct($DESCRIPCION, $ESTADO, $ID_MARCA) {
        $this->DESCRIPCION = $DESCRIPCION;
        $this->ESTADO = $ESTADO;
        $this->ID_MARCA = $ID_MARCA;
    }
    
    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_MARCA() {
        return $this->ID_MARCA;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_MARCA($ID_MARCA) {
        $this->ID_MARCA = $ID_MARCA;
    }



}
