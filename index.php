<?php

include_once __DIR__ . '/app/PetFood.php';




$name = 'Biscotti di pollo';
$price = 25.50;
$brand = 'Purina';
$DateExpiration = '27/03/2025';
$weight = 10;

$biscottiPollo = new PetFood($name, $price, $brand, $DateExpiration, $weight);


$name = 'Carne agnello in scatola';
$price = 1.50;
$brand = 'Monge';
$DateExpiration = '11/05/2023';
$weight = '1.5';

$carneAgnello = new PetFood($name, $price, $brand, $DateExpiration, $weight);

var_dump($biscottiPollo);
var_dump($carneAgnello);