<?php

  require_once __DIR__ . '/products.php';

  class Bed extends Products {
    private $description;

    public function __construct($_image, $_categories, $_brand, $_price, $_description) {
      parent::__construct($_image, $_categories, $_brand, $_price);
      $this->description = $_description;
    }

    public function getDescription() {
      return $this->description;
    }
  }