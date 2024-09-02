<?php

//Require_once é usado para não dar erro no codigo diferente de usar apenas require.
require_once 'FormaGeometrica.php'; 

// extends serve para herdar todos atributos da classe. Nesse caso a classe Veiculo herda os atributos da classe Veiculo
Class Quadrado extends FormaGeometrica{

    public function mover(){

        return "<br>";
    }

    public function calcularLado() {
        // Cálculo do lado do quadrado a partir da área
        return ($this->area / 4);
    }

} 


?>