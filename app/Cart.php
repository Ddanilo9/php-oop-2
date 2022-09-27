<?php


class Cart
{

  public $total;

  function calcTotal($order)
  {
    foreach ($order as $value)
      $this->total += $value->price;// ciclo array per trovare i prezzi del singolo prodotto
  }
}