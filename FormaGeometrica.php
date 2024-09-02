<?php


abstract class FormaGeometrica{
    protected $area;
    protected $comprimento;

    public function __construct($area,$comprimento){
        $this->area = $area;
        $this->comprimento = $comprimento;

    }

    abstract public function mover();

    public function mostrarDetalhes(){

        return "Area: $this->area, Comprimento: $this->comprimento";
        
    }

}

?>