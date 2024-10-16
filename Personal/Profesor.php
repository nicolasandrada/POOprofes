<?php
namespace Personal;

class Profesor extends Docente{
    private $cargos;

    public function __construct($n, $a, $d)
    {
        parent::__construct($n, $a, $d);
        $this->cargos=[];
    }

    
}