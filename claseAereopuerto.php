<?php
class Aereopuerto {
    //pregunta 19//
    private $denoAereop;
    private $direcAereop;
    private $colAereolin;

    public function __construct($denoAereop, $direcAereop, $colAereolin){
        $this->denominacionAereopuerto=$denoAereop;
        $this->direccionAereopuerto=$direcAereop;
        $this->coleccionAereolineas=$colAereolin;
    }
    public function getDenominacionAereopuerto(){
        return $this->denominacionAereopuerto;
    }
    public function getDireccionAereopuerto(){
        return $this->direccionAereopuerto;
    }
    public function getColeccionAereolineas(){
        return $this->ColeccionAereolineas
    }
    public function setDenominacionAereopuerto($denomNueva) {
        $this->denominacionAereopuerto = $denomNueva;
    }
    public function setDireccionAereopuerto($direcNueva) {
        $this->direccionAereopuerto = $direcNueva;
    }
    public function setColeccionAereolineas($colNueva) {
        $this->coleccionAereolineas = $colNueva;
}