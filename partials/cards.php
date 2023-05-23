<div class="container texte-center my-5">
  <h1 class="text-center my-5">Pet Shop</h1>

  <div class="row row-cols-3">
    <?php foreach($products as $product) : ?>
      <div class="col my-3">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="card-text d-block">
              <?php 
                if ($product->getCategories() === 'Cani') {
                  echo '<i class="fa-solid fa-dog"></i>'; 
                }

                if ($product->getCategories() === 'Gatti') {
                  echo '<i class="fa-solid fa-cat"></i>'; 
                }

                if ($product->getCategories() === 'Uccelli') {
                  echo '<i class="fa-solid fa-dove"></i>'; 
                }

                if ($product->getCategories() === 'Pesci') {
                  echo '<i class="fa-solid fa-fish-fins"></i>'; 
                }

                echo ' ' . $product->getCategories();
              ?>  
            </span>

            <span class="card-text d-block">Marca: <?php echo $product->getBrand() ?></span>
            <span class="card-text d-block">Prezzo: <?php echo $product->getPrice() ?> €</span>
            
            <?php 
              if(method_exists($product, 'getMaterial')) {
                echo '<span class="card-text d-block">Materiali:' . ' ' . $product->getMaterial() . '</span>';
              }

              if(method_exists($product, 'getIngredients')) {
                echo '<span class="card-text d-block">Ingredienti:' . ' ' . $product->getIngredients() . '</span>';
              }

              if(method_exists($product, 'getDescription')) {
                echo '<span class="card-text d-block">Descrizione:' . ' ' . $product->getDescription() . '</span>';
              }
            ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


