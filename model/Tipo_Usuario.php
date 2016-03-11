<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Usuario
 *
 * @author kenyi
 */
class Tipo_Usuario {
    PRIVATE $ID_TIPO_USUARIO;
    PRIVATE $NOMBRE;
    PRIVATE $ESTADO;
    
    function __construct($ID_TIPO_USUARIO, $NOMBRE, $ESTADO) {
        $this->ID_TIPO_USUARIO = $ID_TIPO_USUARIO;
        $this->NOMBRE = $NOMBRE;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_TIPO_USUARIO() {
        return $this->ID_TIPO_USUARIO;
    }

    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_TIPO_USUARIO($ID_TIPO_USUARIO) {
        $this->ID_TIPO_USUARIO = $ID_TIPO_USUARIO;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



}
