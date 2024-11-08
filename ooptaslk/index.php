<?php 

require_once 'Product.php';

$productOne = new Product;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="card" style="width: 18rem;">
  <img src="<?php echo $productOne->image = "sam.jpg" ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Product Title :<?php echo $productOne->name ='Mobile'; ?></h5>
    <h5 class="card-title">Product brand :<?php echo $productOne->brand ='Samsung'; ?></h5>
    <p class="card-text"> Descrioption : <?php echo $productOne->description = 'Samsung Galaxy A15 - 8GB RAM - 256GB - Blue Black' ?></p>
    <p class="card-text"> Price : <?php echo $productOne->price = '7899' ?></p>
    <p class="card-text"> Price After Discount : <?php echo $productOne->PriceAfterDiscount(200); ?></p>
    <p class="card-text"> Total Price : <?php echo $productOne->finalPrice(); ?></p>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>