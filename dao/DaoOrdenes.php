<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoOrdenes
 *
 * @author kenyi
 */
class DaoOrdenes {
   public function listarOrdenesxCod($codigo) {
        try {
            $sql = "SELECT * FROM tbl_actividad where Id_Actividad='" . $codigo . "'";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objRol = new ROLPRIVILEGIO($re[0], $re[1], $re[2], $re[4], $re[3]);
                $lista[] = $objRol;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function listarOrdenes() {
        try {
            $sql = "SELECT * FROM tbl_actividad order by Id_Actividad";
            $resul = mysql_query($sql, $this->con);
            $lista = array();
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new USUARIO($re[0], $re[1], $re[2], $re[3], $re[4]);
                $lista[] = $objUsua;
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function codAutOrdenes() {
        try {
            $sql = "SELECT COUNT(*) +1 FROM tbl_actividad";
            $resul = mysql_query($sql, $this->con);
            $objUsua = '';
            while ($re = mysql_fetch_row($resul)) {
                $objUsua = new DETALCANCE($re[0]);
                if (is_null($objUsua->getDETALCANCE())) {
                    $lista = "DA000001";
                } else if ($objUsua->getDETALCANCE() > 0 and $objUsua->getDETALCANCE() < 10) {
                    $lista = "DA00000" . $objUsua->getDETALCANCE();
                } else if ($objUsua->getDETALCANCE() > 9) {
                    $lista = "DA0000" . $objUsua->getDETALCANCE();
                }
            }
            return $lista;
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
        }
    }

    public function registrarOrdenes($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD) {
        try {
            $sql = " INSERT INTO tbl_actividad (Id_Actividad,Nombre,Descripción,Fecha_Hora_Inicio,Fecha_Hora_Fin,Costo,Fecha_Registro,Estado,Prioridad,Complejidad,Id_Usuario) "
                    . "VALUES ('$ID_ACTIVIDAD','$ID_USUARIO','$NOMBRE','$DESCRIPCION','$FECHA_HORA_INICIO','$COSTO','$FECHA_REGISTRO','$ESTADO','$PRIORIDAD','$COMPLEJIDAD')";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }

    public function actualizarOrdenes($ID_ACTIVIDAD, $ID_USUARIO, $NOMBRE, $DESCRIPCION, $FECHA_HORA_INICIO, $COSTO, $FECHA_REGISTRO, $ESTADO, $PRIORIDAD, $COMPLEJIDAD) {
        try {
            $sql = "UPDATE tbl_actividad SET "
                    . "Nombre='$persona',"
                    . "Descripción='$peticion',"
                    . "estado='$estado' WHERE Id_Actividad='$codigo' ";
            $resul = mysql_query($sql, $this->con);
        } catch (Exception $ex) {
            echo "error en el sistema $ex";
            $resul = 'false';
        }
        return $resul;
    }
}
