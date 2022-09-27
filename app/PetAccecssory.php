<?php


include_once __DIR__ . '/Product.php';


class PetAccessory extends Product
{
  public $size;
  public $color;

  function __construct($name, $price, $brand, $size, $color)
  {
    parent::__construct($name, $price, $brand);
    $this->size = $size;
    $this->color = $color;
  }
}