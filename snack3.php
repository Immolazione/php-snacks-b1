<?php

/* 
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

$array = [];

while(count($array) !== 15) {
    $random_number = rand(1, 100);
    if (!in_array($random_number, $array)) {
        $array[] = $random_number;
    }
}
var_dump($array);

?>