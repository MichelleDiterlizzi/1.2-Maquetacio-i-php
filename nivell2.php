<?php

function callCost($minuts){

    $add = 0;

    if($minuts<=3){
        $add = 10;
    }
    else{
        $add = 10 + (5*($minuts-3));
    }
    return $add;
}

echo "El coste de la llamada es de: " .callCost(13) . "€"."<br>";

//EJERCICIO 2;

function choco($chocolates){

    $totalPrice= 1 * $chocolates;
    return $totalPrice;
}

function gum($gums){

    $totalPrice = 0.50 * $gums;
    return $totalPrice;
}

function candy($candys){

    $totalPrice= 1.50 * $candys;
    return $totalPrice;
}

$finalPrice = choco(5) + gum(3) + candy(4);

echo "El coste total es de: " . $finalPrice. "€";

?>