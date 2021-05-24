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

        <h1 class="my-4">Contact Me</h1>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <h6 class="card-subtitle mb-2 text-muted">Muchamad Alfian Nur Iman</h6>
                <p class="card-text">
                  Digital Valley, 4th Floor Menara Bandung, Jl. Gegerkalong Hilir No.47, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152
                </p>
                <p class="card-text font-weight-bold">Telepon : (022) 4572380</p>
                <p class="card-text font-weight-bold">Email : Lord@alfianblog.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-8">
            <form>
               <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

      </div>

      <?php require_once 'layouts/sidebar.php' ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php require_once 'layouts/footer.php'; ?>

</body>

</html>
