<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author kenyi
 */
class Usuario {
    PRIVATE $NOMBRE_USUARIO;
    PRIVATE $PASSWORD;
    PRIVATE $ESTADO;
    PRIVATE $ID_PERSONA;
    PRIVATE $ID_TIPO_USUARIO;
    
    function __construct($NOMBRE_USUARIO, $PASSWORD, $ESTADO, $ID_PERSONA, $ID_TIPO_USUARIO) {
        $this->NOMBRE_USUARIO = $NOMBRE_USUARIO;
        $this->PASSWORD = $PASSWORD;
        $this->ESTADO = $ESTADO;
        $this->ID_PERSONA = $ID_PERSONA;
        $this->ID_TIPO_USUARIO = $ID_TIPO_USUARIO;
    }
    
    function getNOMBRE_USUARIO() {
        return $this->NOMBRE_USUARIO;
    }

    function getPASSWORD() {
        return $this->PASSWORD;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_PERSONA() {
        return $this->ID_PERSONA;
    }

    function getID_TIPO_USUARIO() {
        return $this->ID_TIPO_USUARIO;
    }

    function setNOMBRE_USUARIO($NOMBRE_USUARIO) {
        $this->NOMBRE_USUARIO = $NOMBRE_USUARIO;
    }

    function setPASSWORD($PASSWORD) {
        $this->PASSWORD = $PASSWORD;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_PERSONA($ID_PERSONA) {
        $this->ID_PERSONA = $ID_PERSONA;
    }

    function setID_TIPO_USUARIO($ID_TIPO_USUARIO) {
        $this->ID_TIPO_USUARIO = $ID_TIPO_USUARIO;
    }



}
