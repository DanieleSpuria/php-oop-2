<?php

  require_once __DIR__ . '/products.php';

  class Games extends Products {
    private $material;

    public function __construct($_image, $_categories, $_brand, $_price, $_material) {
      parent::__construct($_image, $_categories, $_brand, $_price);
      $this->material = $_material;
    }

    public function getMaterial() {
      return $this->material;
    }
  }