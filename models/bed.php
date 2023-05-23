<?php

  require_once __DIR__ . '/products.php';

  class Bed extends Products {
    private $type;

    public function __construct($_image, $_categories, $_brand, $_price, $_type) {
      parent::__construct($_image, $_categories, $_brand, $_price);
      $this->type = $_type;
    }

    public function getType() {
      return $this->type;
    }
  }