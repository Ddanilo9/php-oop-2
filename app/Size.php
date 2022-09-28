<?php

trait Size{
    public $size;
    
    function setSize($size){
    if($size == null){
      $this->size = 'Finish product';
    } else {
      $this->size = $size;
    }
  }
}
