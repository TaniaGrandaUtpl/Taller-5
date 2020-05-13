<?php
    function sumar($num1, $num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }
    function verificarSiEsParoImpar($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return "Impar";
        }
    }
    function Operacion($num1, $num2){
        $suma = sumar($num1, $num2);
        $res = verificarSiEsParoImpar($suma);
        echo("La suma de: ". $num1." + ".$num2." da como resultado un número ".$res);
    }
    Operacion(10,4);
?>