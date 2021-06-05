<!DOCTYPE html>
<html lang="en">

<?php
  require_once 'app/Product.php';

  $product = new Product;
  $models = $product->getList();
?>

<?php require_once 'layouts/header.php'; ?>

<body>

  <?php require_once 'layouts/navbar.php'; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Product</h1>

        

        <div class="row">
          <?php foreach($models as $model): ?>
            <div class="col-6">
              <div class="card" style="width: 18rem;">
                <img src="<?php echo $model['post_thumbnail_image'] ?>" class="card-img-top" alt="Product image">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $model['title'] ?></h5>
                  <p class="card-text"><?php echo $model['description'] ?></p>
                  <hr>
                  <strong class="card-text text-lg-right font-weight-bold">
                    <?php echo 'Rp. ' . $model['price'] ?>
                  </strong>
                  <hr>
                  <a href="#" class="btn btn-primary">Purchase</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4 mt-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <?php require_once 'layouts/sidebar.php' ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php require_once 'layouts/footer.php'; ?>

</body>

</html>
