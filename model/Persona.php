<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author kenyi
 */
class Persona {
    PRIVATE $ID_PERSONA;
    PRIVATE $NOMBRES;
    PRIVATE $APELLIDO_PATERNO;
    PRIVATE $APELLIDO_MATERNO;
    PRIVATE $DNI;
    PRIVATE $CORREO;
    PRIVATE $DIRECCION;
    PRIVATE $FECHA_NACIMIENTO;
    PRIVATE $TELEFONO;
    PRIVATE $RUC;
    PRIVATE $ESTADO;
    
    function __construct($ID_PERSONA, $NOMBRES, $APELLIDO_PATERNO, $APELLIDO_MATERNO, $DNI, $CORREO, $DIRECCION, $FECHA_NACIMIENTO, $TELEFONO, $RUC, $ESTADO) {
        $this->ID_PERSONA = $ID_PERSONA;
        $this->NOMBRES = $NOMBRES;
        $this->APELLIDO_PATERNO = $APELLIDO_PATERNO;
        $this->APELLIDO_MATERNO = $APELLIDO_MATERNO;
        $this->DNI = $DNI;
        $this->CORREO = $CORREO;
        $this->DIRECCION = $DIRECCION;
        $this->FECHA_NACIMIENTO = $FECHA_NACIMIENTO;
        $this->TELEFONO = $TELEFONO;
        $this->RUC = $RUC;
        $this->ESTADO = $ESTADO;
    }
    
    function getID_PERSONA() {
        return $this->ID_PERSONA;
    }

    function getNOMBRES() {
        return $this->NOMBRES;
    }

    function getAPELLIDO_PATERNO() {
        return $this->APELLIDO_PATERNO;
    }

    function getAPELLIDO_MATERNO() {
        return $this->APELLIDO_MATERNO;
    }

    function getDNI() {
        return $this->DNI;
    }

    function getCORREO() {
        return $this->CORREO;
    }

    function getDIRECCION() {
        return $this->DIRECCION;
    }

    function getFECHA_NACIMIENTO() {
        return $this->FECHA_NACIMIENTO;
    }

    function getTELEFONO() {
        return $this->TELEFONO;
    }

    function getRUC() {
        return $this->RUC;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setID_PERSONA($ID_PERSONA) {
        $this->ID_PERSONA = $ID_PERSONA;
    }

    function setNOMBRES($NOMBRES) {
        $this->NOMBRES = $NOMBRES;
    }

    function setAPELLIDO_PATERNO($APELLIDO_PATERNO) {
        $this->APELLIDO_PATERNO = $APELLIDO_PATERNO;
    }

    function setAPELLIDO_MATERNO($APELLIDO_MATERNO) {
        $this->APELLIDO_MATERNO = $APELLIDO_MATERNO;
    }

    function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    function setCORREO($CORREO) {
        $this->CORREO = $CORREO;
    }

    function setDIRECCION($DIRECCION) {
        $this->DIRECCION = $DIRECCION;
    }

    function setFECHA_NACIMIENTO($FECHA_NACIMIENTO) {
        $this->FECHA_NACIMIENTO = $FECHA_NACIMIENTO;
    }

    function setTELEFONO($TELEFONO) {
        $this->TELEFONO = $TELEFONO;
    }

    function setRUC($RUC) {
        $this->RUC = $RUC;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }



            
}
