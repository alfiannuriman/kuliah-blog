<!DOCTYPE html>
<html lang="en">

<?php
  require_once 'lib/Post.php';

  $post = new Post;

  $articles = $post->where('post_type_id', Post::POST_TYPE_ARTICLE);

?>

<?php require_once 'layouts/header.php'; ?>

<body>

  <?php require_once 'layouts/navbar.php'; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog post</h1>

        <?php foreach ($articles as $article): ?>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $article['post_thumbnail_image'] ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $article['title'] ?></h2>
              <p class="card-text"><?php echo $article['description'] ?></p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo date('d F Y H:i:s', strtotime($article['post_date'])) ?> by
              <a href="#"><?php echo $article['author'] ?></a>
            </div>
          </div>

        <?php  endforeach; ?>

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
