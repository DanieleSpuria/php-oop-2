<?php

  include __DIR__ . '/../models/games.php';
  include __DIR__ . '/../models/food.php';
  include __DIR__ . '/../models/bed.php';

  $products = [
    new Food('https://shop-cdn-m.mediazs.com/bilder/natural/trainer/sterilised/con/carni/bianche/1/400/97653_pla_naturaltrainer_sterilised_white_meat_cat_10kg_1.jpg', 'Gatto', 'Natural trainer', '56,99', 'Salmone.'),
    new Games('https://shop-cdn-m.mediazs.com/bilder/altalena/per/uccelli/natur/trixie/2/800/21068_PLA_Vogelschaukel_Natur_2.jpg', 'Uccelli', 'Natur Trixie', '3,49', 'Legno naturale.'),
    new Food('https://shop-cdn-m.mediazs.com/bilder/rocco/chings/double/3/800/pla_rocco_chingsdouble_chicken_1000x1000_3.jpg', 'Cani', 'Rocco Chings', '6,29', 'Pollo e Agnello.'),
    new Bed('https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/9/800/60837_spike_classic_outside_fg_9141_9.jpg', 'Cane', 'Spike Classic', '106,99', 'Cuccia per cani Spike Classic, in legno di cipresso di Cunningham oleato, con tetto in cartone bitumato a spioventi. Piedini regolabili in altezza, ideale in caso di pioggia. (Il cane non è incluso)'),
    new Games('https://shop-cdn-m.mediazs.com/bilder/palla/natural/catnip/5/800/54356_PLA_Katzenspielzeug_Natural_Catnip_Ball_FG_DSC6759_5.jpg', 'Gatti', 'Zooplus', '1,99', 'Catnip'),
    new Food('https://shop-cdn-m.mediazs.com/bilder/tetra/tablets/tabimin/mangime/in/compresse/9/800/9096_PLA_Tetra_Tablets_TabiMin_Futtertabletten_120Stk_9.jpg', 'Pesci', 'Tetra', '3,69', 'atte e prodotti caseari, pesci e sottoprodotti del pesce, estratti proteici vegetali, cereali, lieviti, alghe, molluschi e crostacei, oli e grassi, zucchero, minerali.')
  ];

?>