<?php
$prices = [100, 200, 300, 400];
$new = array_map(function ($price){
   return $price *1.1;
}, $prices);

print_r($new);

$numbers = [5, 12, 7, 20, 3, 18];

$filtered = array_filter(function ($number) {
    return $number > 10;
}, $numbers);

print_r($filtered);


$prices = [100, 250, 50];

$total = array_reduce($prices, function ($carry, $price) {
    return $carry + $price;
}, 0);

echo $total . "\n";