<?php

  class Products {
    private $categories;
    private $brand;
    private $price;

    public function __construct($_categories, $_brand, $_price) {
      $this->categories = $_categories;
      $this->brand = $_brand;
      $this->price = $_price;
    }
  }
