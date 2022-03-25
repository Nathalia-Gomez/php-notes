<?php

class Casa{
    
    private $propietario;
    private $zona;
    private $superficie;
    
    //Constructor
    
    public function __construct($propietariox, $zonax, $superficiex){
        $this->propietario=$propietariox;
        $this->zona=$zonax;
        $this->superficie=$superficiex;
    }
    
    //Getters y Setters
    
    public function setPropietario ($propietariox){
        $this->propietario=$propietariox;
    }
    
    public function getPropietario (){
        return $this->propietario;
    }
    
    public function setZona ($zonax){
        $this->zona=$zonax;
    }
    
    public function getZona (){
        return $this->zona;
    }
   
    
    public function setSuperficie ($superficiex){
        $this->superficie=$superficiex;
    }
    
    private function getSuperficie (){
        return $this->superficie;
    }
    
    //Métodos
    
    private function calcularTipoImpuesto(){
        switch(true){
                case($this->superficie<100):
                return "A";
                
                case($this->superficie>=100 && $this->superficie<=300):
                return "B";
                
                case($this->superficie>300):
                return "C";
                
            default:
                return "Sin valor";
                
        }
    }
    
    private function calcularImpuesto(){
        switch ($this->calcularTipoImpuesto()){
                
            case "A":
                return "$500";
                
            case "B":
                return "$1000";
                
            case "C":
                return "$1500";
                
            default:
                return "Sin valor";
        }
    }


    public function imprimirImpuesto(){
        echo $this->propietario."-".$this->zona."->Impuesto a pagar:".$this->calcularImpuesto();
    }
}


?>