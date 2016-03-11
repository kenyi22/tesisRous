<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Color
 *
 * @author kenyi
 */
class Color {
    PRIVATE $ID_COLOR;
    PRIVATE $NOMBRE_COLOR;
    PRIVATE $ESTADO;
    
    function __construct($ID_COLOR, $NOMBRE_COLOR, $ESTADO) {
        $this->ID_COLOR = $ID_COLOR;
        $this->NOMBRE_COLOR = $NOMBRE_COLOR;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_COLOR() {
        return $this->ID_COLOR;
    }

    function getNOMBRE_COLOR() {
        return $this->NOMBRE_COLOR;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_COLOR($ID_COLOR) {
        $this->ID_COLOR = $ID_COLOR;
    }

    function setNOMBRE_COLOR($NOMBRE_COLOR) {
        $this->NOMBRE_COLOR = $NOMBRE_COLOR;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}
