<?php

class Persona{

    private $nombre;
    private $apellido;
    
    public function __construct($nombrex, $apellidox){
        echo "<br>Construyendo objeto $nombre";
        $this->nombre=$nombrex;
        $this->apellido=$apellidox;
    }
    
    public function setNombre ($nombrex){
        $this->nombre=$nombrex;
    }
    
    public function getNombre (){
        return $this->nombre;
    }
    
    public function setApellido($apellidox){
        $this->apellido=$apellidox;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    
    public function nombreCompleto(){
        return ($this->nombre ." ".$this->apellido);
    }
}


class Instructor extends Persona{
    private $salario;
    
    public function __construct($n,$a,$salariox){
        parent::__construct($n,$a);
        $this->salario=$salariox;
    }
    
    public function setSalario($salariox){
        $this->salario=$salariox;
    }
    
    public function getSalario(){
        return $this->salario;
    } 
}


class Estudiante extends Persona{
    private $matricula;
    
    public function __construct($n,$a,$matriculax){
        parent::__construct($n,$a);
        $this->matricula=$matriculax;
    }
    
    public function setMatricula($matriculax){
        $this->matricula=$matriculax;
    }
    
    public function getMatricula(){
        return $this->matricula;
    } 
}

?>


