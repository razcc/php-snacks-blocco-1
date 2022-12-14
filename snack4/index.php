<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$array = [];

for ($i = 0; $i < 15; $i++) {
    $numeroRandom = rand(1, 100);

    if (!in_array($numeroRandom, $array)) {
        $array[] = $numeroRandom;
    }
    echo ($array[$i]);
    echo '<br />';
}

var_dump($array)


    ?>