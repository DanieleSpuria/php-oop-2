<?php

  require_once __DIR__ . '/products.php';

  class Food extends Products {
    private $ingredients;

    public function __construct($_image, $_categories, $_brand, $_price, $_ingredients) {
      parent::__construct($_image, $_categories, $_brand, $_price);
      $this->ingredients = $_ingredients;
    }

    public function getIngredients() {
      return $this->ingredients;
    }
  }