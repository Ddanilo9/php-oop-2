<?php


include_once __DIR__ . '/Product.php';
require_once __DIR__ . "/Size.php";


class PetAccessory extends Product
{

  use Size;
  public $color;

  function __construct($name, $price, $brand, $size, $color)
  {
    parent::__construct($name, $price, $brand);
    $this->setSize($size);
    $this->color = $color;
  }

}