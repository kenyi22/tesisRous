<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Notificacion
 *
 * @author kenyi
 */
class Tipo_Notificacion {
    PRIVATE $NOMBRE;
    PRIVATE $ESTADO;
    PRIVATE $ID_TIPO_NOTIFICACION;
    
    function __construct($NOMBRE, $ESTADO, $ID_TIPO_NOTIFICACION) {
        $this->NOMBRE = $NOMBRE;
        $this->ESTADO = $ESTADO;
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
    }
    
    function getNOMBRE() {
        return $this->NOMBRE;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function getID_TIPO_NOTIFICACION() {
        return $this->ID_TIPO_NOTIFICACION;
    }

    function setNOMBRE($NOMBRE) {
        $this->NOMBRE = $NOMBRE;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    function setID_TIPO_NOTIFICACION($ID_TIPO_NOTIFICACION) {
        $this->ID_TIPO_NOTIFICACION = $ID_TIPO_NOTIFICACION;
    }



}
