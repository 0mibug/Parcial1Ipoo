<?php
//pregunta 1 y 2//
class Persona{
    private $pnombre;
    private $papellido;
    private $pdireccion;
    private $mail;
    private $telefono;

    public function __construct($pnombre, $papellido, $pdireccion, $mail, $telefono){
        $this -> nombrePersona=$pnombre;
        $this -> apellidoPersona=$papellido;
        $this -> direccionPersona=$pdireccion;
        $this -> mailPersona=$mail;
        $this -> telefonoPersona=$telefono;
    }
    //gets y sets//
    public function getNombrePersona(){
        return $this->nombrePersona;
    }
    public function getApellidoPersona(){
        return $this->apellidoPersona;
    }
    public function getDireccionPersona(){
        return $this->direccionPersona;
    }
    public function getMailPersona(){
        return $this->mailPersona;
    }
    public function getTelefonoPersona(){
        return $this->telefonoPersona;
    }

    public function setNombrePersona($nombrePerNuevo){
        $this->nombrePersona = $nombrePerNuevo;
    }
    public function setApellidoPersona($apellidoPerNuevo){
        $this->apellidoPersona = $apellidoPerNuevo;
    }
    public function setDireccionPersona($direccionPerNuevo){
        $this->direccionPersona= $direccionPerNuevo;
    }
    public function setMailPersona($mailPerNuevo){
        $this->mailPersona = $mailPerNuevo;
    }
    public function setTelefonoPersona($telefonoPerNuevo){
        $this->telefonoPersona = $telefonoPerNuevo;
    }
 //pregunta 4//
    public function __toString () {
        $cadena=(
            "Nombre: ". $this->getNombrePersona().
            "Apellido: ". $this->getApellidoPersona().
            "Direccion: ". $this->getDireccionPersona().
            "Mail: ". $this->getMailPersona().
            "Telefono: ". $this->getTelefonoPersona()
        );
        return $cadena;
    }
}
?>

