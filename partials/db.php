<?php

  include __DIR__ . '/../models/games.php';
  include __DIR__ . '/../models/food.php';
  include __DIR__ . '/../models/bed.php';

  $products = [
    new Food('https://shop-cdn-m.mediazs.com/bilder/natural/trainer/sterilised/con/carni/bianche/1/400/97653_pla_naturaltrainer_sterilised_white_meat_cat_10kg_1.jpg', 'Gatto', 'Natural trainer', '56,99', 'Salmone'),
    new Games('https://shop-cdn-m.mediazs.com/bilder/altalena/per/uccelli/natur/trixie/2/800/21068_PLA_Vogelschaukel_Natur_2.jpg', 'Uccelli', 'Natur Trixie', '3,49', 'Legno naturale'),
  ];

?>