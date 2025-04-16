<?php
//pregunta 7//
class Aereolinea {
    private $identVuelo;
    private $nombreVuelo;
    private $colVuelos = [];

    public function __construct($identVuelo, $nombreVuelo, $colVuelos){
        $this-> identificacionVuelo = $identVuelo;
        $this-> nombreVuelo = $nombreVuelo;
        $this-> coleccionVuelos = $colVuelos;
    }
}