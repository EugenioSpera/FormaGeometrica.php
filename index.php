<?php


require_once 'Circulo.php';
require_once 'Quadrado.php';

$meuCirculo = new Circulo("10","0");

echo $meuCirculo->mostrarDetalhes();
echo $meuCirculo->mover();
echo "Raio do circulo: " . $meuCirculo->calcularRaio();

$meuQuadrado = new Quadrado("20","0");

echo $meuQuadrado->mostrarDetalhes();
echo $meuQuadrado->mover();
echo "Lado do quadrado: " . $meuQuadrado->calcularLado();



?>