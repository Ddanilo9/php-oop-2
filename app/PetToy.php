<?php

include_once __DIR__ . '/Product.php';
require_once __DIR__ . "/Size.php";

class PetToy extends Product
{
  use Size;
  public $materials;

  function __construct($name, $price, $description, $size, $materials)
  {
    parent::__construct($name, $price, $description);
    $this->setSize($size);
    $this->materials = $materials;
  }

 
}