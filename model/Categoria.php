<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author kenyi
 */
class Categoria {
    PRIVATE $ID_CATEGORIA;
    PRIVATE $DESCRIPCION;
    PRIVATE $ESTADO;
    
    function __construct($ID_CATEGORIA, $DESCRIPCION, $ESTADO) {
        $this->ID_CATEGORIA = $ID_CATEGORIA;
        $this->DESCRIPCION = $DESCRIPCION;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_CATEGORIA() {
        return $this->ID_CATEGORIA;
    }

    function getDESCRIPCION() {
        return $this->DESCRIPCION;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_CATEGORIA($ID_CATEGORIA) {
        $this->ID_CATEGORIA = $ID_CATEGORIA;
    }

    function setDESCRIPCION($DESCRIPCION) {
        $this->DESCRIPCION = $DESCRIPCION;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}
