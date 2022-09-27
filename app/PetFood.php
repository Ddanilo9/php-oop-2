<?php

include_once __DIR__ . '/Product.php';


class PetFood extends Product
{
  public $DateExpiration;
  public $weight;

  function __construct($name, $price, $brand, $DateExpiration, $weight)
  {
    parent::__construct($name, $price, $brand);
    $this->DateExpiration = $DateExpiration;
    $this->weight = $weight;
  }
}