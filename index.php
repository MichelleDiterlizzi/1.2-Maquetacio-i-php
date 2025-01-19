<?php

$edad= 26;
$media= 7.5;
$ciudad= "Roma";
$universidad= false;

define("nombre","Michelle");
echo "<h1>".nombre."</h1>";

$texto= "Hello, World! ";

echo $texto."<br>";
echo strtoupper($texto)."<br>";
echo strlen($texto)."<br>";
echo strrev($texto)."<br>";

$presentation= "Este es el curso de PHP";
echo $texto.$presentation."<br>";


//EJERCICIO 3;
$X= 4;
$Y= 13;
$N= 7.5;
$M= 10.20;

echo "Valor de X: ".$X."<br>";
echo "Valor de Y: ".$Y."<br>";
echo "Suma: ".($X+$Y)."<br>";
echo "Resta :".($X-$Y)."<br>";
echo "Producto: ".($X*$Y)."<br>";
echo "Módulo: ".($X%$Y)."<br>";

echo "Valor de N: ".$N."<br>";
echo "Valor de M: ".$M."<br>";
echo "Suma: ".($N+$M)."<br>";
echo "Resta :".($N-$M)."<br>";
echo "Producto: ".($N*$M)."<br>";
echo "Módulo: ".($N%$M)."<br>";

echo "Doble de X: " . ($X * 2) . "<br>";
echo "Doble de Y: " . ($Y * 2) . "<br>";
echo "Doble de N: " . ($N * 2) . "<br>";
echo "Doble de M: " . ($M * 2) . "<br>";
echo "Suma de totes les variables: " . ($X + $Y + $N + $M) . "<br>";
echo "Producte de totes les variables: " . ($X * $Y * $N * $M) . "<br>";


function Calculadora($num1, $num2, $operacio) {
    switch ($operacio) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacio':
            return $num1 * $num2;
        case 'divisio':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "No es pot dividir per zero!";
            }
        default:
            return "Operació no vàlida!";
    }
}

// Exemples d'ús de la funció
echo "Suma: " . Calculadora(10, 5, 'suma') . "<br>";
echo "Resta: " . Calculadora(10, 5, 'resta') . "<br>";
echo "Multiplicació: " . Calculadora(10, 5, 'multiplicacio') . "<br>";

//EJERCICIO 4;
function counter($nummax = 10,$nummult = 1){


    for($i=0; $i<=$nummax; $i+=$nummult){
        echo "$i<br>";
    }
}

echo counter(30, 4);


//EJERCICIO 5;
function verificarGrau($nota) {
    if ($nota >= 60) {
        return "Primera Divisió";
    } else if ($nota >= 45 && $nota <= 59) {
        return "Segona Divisió";
    } else if ($nota >= 33 && $nota <= 44) {
        return "Tercera Divisió";
    } else {
        return "Reprovat";
    }
}

echo verificarGrau(40)."<br>";

//EJERCICIO 6;
function isBitten(){
    return rand(0,1);
}

if (isBitten()===1){
    echo "Charlie me ha mordido el dedo!";
}
else{
    echo "Charlie no me ha mordido el dedo!";
}

?>

