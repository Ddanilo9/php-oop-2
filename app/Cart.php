<?php


class Cart
{

  public $total;

  function calcTotal($order)
  { if(count($order) > 0){
    foreach ($order as $value)
      $this->total += $value->price;// ciclo array per trovare i prezzi del singolo prodotto
  }else{
    throw new Exception('Cart is empty');
  }
    
  } 
}