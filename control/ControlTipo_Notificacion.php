<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlTipo_Notificacion
 *
 * @author kenyi
 */
class ControlTipo_Notificacion {
    function __construct() {
        $this->objD = new daoNegocio();
    }
    
    public function listarTipo_NotificacionxCod($codigo) {
        return $this->objD->listarTipo_NotificacionxCod($codigo);
    }

    public function listarTipo_Notificacion() {
        return $this->objD->listarTipo_Notificacion();
    }
    
    public function codAutTipo_Notificacion() {
        return $this->objD->codAutTipo_Notificacion();
    }
    
    public function registrarTipo_Notificacion($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->registrarTipo_Notificacion($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
    
    public function actualizarTipo_Notificacion($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD) {
        return $this->objD->actualizarTipo_Notificacion($ID_ACTIVIDAD,$ID_USUARIO,$NOMBRE,$DESCRIPCION,$FECHA_HORA_INICIO,$COSTO,$FECHA_REGISTRO,$ESTADO,$PRIORIDAD,$COMPLEJIDAD);
    }
}
