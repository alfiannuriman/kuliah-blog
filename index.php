<!DOCTYPE html>
<html lang="en">

<?php require_once 'layouts/header.php'; ?>

<body>

  <?php require_once 'layouts/navbar.php'; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog post</h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="https://media.prod.mdn.mozit.cloud/attachments/2014/11/18/9461/012655e623bef579c9bd376e227bc648/css-declaration-small.png" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Cascading Style Sheet (CSS)</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on November 6, 2020 by
            <a href="#">Alfian</a>
          </div>
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
