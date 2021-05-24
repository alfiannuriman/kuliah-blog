<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">
      &copy; Copyright by 18111215_Muchamad Alfian Nur Iman_TIF RM 18 CID A
    </p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  function searchContent() {
    let searchQuery = document.querySelector('#search-main-input').value;

    // SEARCH VALIDATION
    if (searchQuery && searchQuery.length > 0) {
      alert('You searched for : ' + searchQuery);
    } else {
      alert('You cannot do an empty search');
    }
  }

  function validateLoginForm() {
    let isValidStatus = true;
    let errorMessage = '';
    let inputEmail = document.querySelector('#login-mail-input').value;
    let inputPassword = document.querySelector('#login-password-input').value;

    if (!inputEmail || inputEmail.length == 0) {
      isValidStatus = false;
      errorMessage = 'Email is empty, please input valid email';
    }

    if (!inputPassword || inputPassword.length == 0) {
      isValidStatus = false;
      errorMessage = 'Password is empty, please input your password';
    }


    if (isValidStatus == false) {
      alert(errorMessage)
    }

    return isValidStatus;
  }

  function submitLogin() {

    let isValidStatus = true;
    let errorMessage = '';
    let inputEmail = document.querySelector('#login-mail-input').value;
    let inputPassword = document.querySelector('#login-password-input').value;

    if (!inputEmail || inputEmail.length == 0) {
      isValidStatus = false;
      errorMessage = 'Email is empty, please input valid email';
    }

    if (!inputPassword || inputPassword.length == 0) {
      isValidStatus = false;
      errorMessage = 'Password is empty, please input your password';
    }

    if (isValidStatus) {
      window.location = 'http://www.yoururl.com';
    } else {
      alert(errorMessage)
    }
  }
</script>