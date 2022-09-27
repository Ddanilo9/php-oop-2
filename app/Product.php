<?php


class Product
{
  public $name;
  public $price;
  public $brand;

  function __construct($name, $price, $brand)
  {
    $this->name = $name;
    $this->price = $price;
    $this->brand = $brand;
  }
}