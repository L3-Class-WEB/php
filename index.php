<?php

$mavar = 'toto';

$products = [
    'Verre', 
    'Bol',
    'Pomme de terre'
];

//var_dump($mavar,$array);

$number = 13;

foreach ($products as $product){
    echo $product;
}

if (count($products) === 3){
    echo 'Mon tableau est complet';
}
    else{
        echo 'Mon tableau n\'est pas complet';
    }
