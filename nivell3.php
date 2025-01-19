<?php


function eratostenes($num){

$esPrimer = array_fill(0, $num + 1, true);

    // 0 i 1 no són primers
    $esPrimer[0] = $esPrimer[1] = false;


    $array = [];

    for($i = 2; $i * $i <= $num; $i++){

        if ($esPrimer[$i]){
            for($j = $i * $i
            ; $j <= $num; $j+=$i){

                $esPrimer[$j] = false;
            }
        }
    }

        for ($k = 2; $k <= $num; $k++) {
            if ($esPrimer[$k]) {
                array_push($array, $k);
            }
        }

    return $array;
}

print_r(eratostenes(20));

?>