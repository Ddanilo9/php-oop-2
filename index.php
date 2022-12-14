<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/PetAccecssory.php';
include_once __DIR__ . '/app/Cart.php';


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
$weight = 1.5;

$carneAgnello = new PetFood($name, $price, $brand, $DateExpiration, $weight);

var_dump($biscottiPollo);
var_dump($carneAgnello);

$name = 'Osso di legno Java';
$price = 4.90;
$brand = 'Imac';
$size = 'S';
$materials = 'legno';

$ossoLegno = new PetToy($name, $price, $brand, $size, $materials);

$name = 'Palla Intrecciata in Corda';
$price = 3.00;
$brand = 'Imac';
$size = null;
$materials = 'Cotone naturale';

$PallaIntrecciata = new PetToy($name, $price, $brand, $size, $materials);


var_dump($ossoLegno);
var_dump($PallaIntrecciata);


$name = 'Cappottino Frozen';
$price = 44.00;
$brand = 'Musi';
$size = 'L';
$color = 'black';

$Cappottino = new PetAccessory($name, $price, $brand, $size, $color);

$name = 'Maglioncino Gomitolo';
$price = 40.00;
$brand = 'Musi';
$size = 'M';
$color = 'red';

$Maglioncino = new PetAccessory($name, $price, $brand, $size, $color);
var_dump($Cappottino);
var_dump($Maglioncino);

$shopCart = [$Cappottino];
$order = new Cart($shopCart);

try{
    $order->calcTotal($shopCart);    
} catch(Exception $e) {
    echo $e->getMessage();
}



var_dump($shopCart, $order);