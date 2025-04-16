<?php
class Vuelos {
//pregunta 6//
function asignarAsiDisp($cantPasajeros){
    $respuesta=true;
    $cantDisp= $this->getCantAsiDisp();
    if($cantPasajeros >= $cantDisp){
        $respuesta = false;
    }
    return $respuesta;
}
}