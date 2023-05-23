<?php

  class Products {
    private $type;
    private $brand;
    private $price;
  
    public function __construct($_type, $_brand, $_price) {
      $this->type = $_type;
      $this->brand = $_brand;
      $this->price = $_price;
    }
  }
