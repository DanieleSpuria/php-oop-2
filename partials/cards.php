<div class="container texte-center my-5">
  <h1 class="text-center my-5">Pet Shop</h1>

  <div class="row">
    <?php foreach($products as $product) : ?>
      <div class="col row-cols-3">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="card-text d-block"><?php echo $product->getCategories() ?></span>
            <span class="card-text d-block">Marca: <?php echo $product->getBrand() ?></span>
            <span class="card-text d-block">Prezzo: <?php echo $product->getPrice() ?> €</span>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>