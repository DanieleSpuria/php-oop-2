<?php

  require_once __DIR__ . '/products.php';

  class Bed extends Products {
    private $type;

    public function __construct($_categories, $_brand, $_price, $_type) {
      parent::__construct($_categories, $_brand, $_price);
      $this->type = $_type;
    }
  }