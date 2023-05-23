<?php

  class Products {
    private $image;
    private $categories;
    private $brand;
    private $price;

    public function __construct($_image, $_categories, $_brand, $_price) {
      $this->image = $_image;
      $this->categories = $_categories;
      $this->brand = $_brand;
      $this->price = $_price;
    }

    public function getImage() {
      return $this->image;
    }

    public function getCategories() {
      return $this->categories;
    }

    public function getBrand() {
      return $this->brand;
    }

    public function getPrice() {
      return $this->price;
    }
  }
