<?php

/***
 * @DevelopedBy Villca
 ***/

class DevTools
{

     public static function fecha_texto($date_in = null, $date_out = null, $format = 0)
    {
        $day = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado"];
        $month = ["","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

        $return = '';
        switch ($format){
            case 1:
                $date_in = explode('/',$date_in);
                $return = $date_in[0].' de '.$month[intval($date_in[1])].' de '.$date_in[2];
                break;
            case 2:
                $date_in = explode('/',$date_in);
                $date_out = explode('/',$date_out);
                if($date_in[2] == $date_out[2]){
                    $return = $date_in[0].' de '.$month[intval($date_in[1])].' al '.$date_out[0].' de '.$month[intval($date_out[1])].' de '.$date_out[2];
                }else{
                    $return = $date_in[0].' de '.$month[intval($date_in[1])].' de '.$date_in[2].' al '.$date_out[0].' de '.$month[intval($date_out[1])].' de '.$date_out[2];
                }
                break;
            case 6:
                foreach (explode(" ", $date_in) as $value) {
                    $return .= $value[0];
                }
                break;
            default:
                $return = date('d') . ' de ' . $month[date('n')] . ' de ' . date('Y');
        }
        return $return;
    }

}