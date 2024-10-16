<?php
namespace Personal;

class Docente{
    
    public $nombre, $apellido;
    protected $dni;

    public function __construct($n, $a = 'Lopez', $d = '00000000')
    {
        $this->nombre = $n;
        $this->apellido = $a;
        $this->dni = $d;
    }

    public function setDni($d){
        if(strlen($d) == 8 AND is_numeric($d)){
            $this->dni = $d;
            return true;
        }
        return false;
    }

    public function getDni(){
        return $this->dni;
    }

    public function nombreCompleto(){
        return $this->apellido. ", " .$this->nombre;
    }
}