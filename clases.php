<?php
class persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $pasatiempos;

    function __construct($nombre,$apellido)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad= 18;
    }


    function mayoredad(){
        return $this->edad >=18 ? 'si' : 'No';
    }

    function setedad($val){
        $this-> edad =$val;
    }
    function getedad(){
        return $this->edad;
    }
}

$persona = new Persona("Pepe","ABC");
$persona->setedad(18);
echo $persona->mayoredad();



