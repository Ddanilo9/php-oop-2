<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product
{
  public $ForSizeAnimal;
  public $materials;

  function __construct($name, $price, $description, $ForSizeAnimal, $materials)
  {
    parent::__construct($name, $price, $description);
    $this->ForSizeAnimal = $ForSizeAnimal;
    $this->materials = $materials;
  }
}