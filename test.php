<?php
    $array1    = array("a" => "verde", "rojo", "azul", "rojo");
$array2    = array("b" => "verde", "amarillo", "rojo");
$resultado = array_diff($array2, $array1);

var_dump($resultado);

$animales = array (
    "gato" => "Sunny",
    "perro" => "Stoichkov",
    "chimpancé" => "Muggles",
    "chinchilla" => "Herminia",
    "Charles",
    "oso" => "Tarzan"
);
$animales2 = array (
    "perro" => "Stoichkov",
    "gato" => "Sunny",
    "conejo" => "Tarzan",
    "Muggles"
);
$diferencia = array_diff($animales2, $animales);
var_dump($diferencia);
?>