<?php include("includes/configuration.php");?>
<!doctype html>
<html lang="en">
<head>
  <?php include("includes/head-tag.php");?>

</head>
<body>
  <?php // include("includes/navigation.php");?>
  <div class="row row-top">
    <div class="login-main-container">
      <div class="login-header-container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="./"><span class="header-title font-weight-bolder">PawsOnMyWayHome</span></a>
        </nav>
        <hr style="margin:0" />
      </div>
    </div>
  </div>
  <div class="row row-bottom">
    <div class="login-main-container">
      <div class="main-content">
        <div class="login-title">Log In</div>
          <form>
            <button type="button" class="form-control btn btn-facebook"><span class="font-weight-bolder">continue with Facebook</span></button>
            
            <div class="log-in-separator-option">
              <div class="row">
                <div class="col-sm-5"><hr /></div>
                <div class="col-sm-2 text-center text-primary font-weight-bolder">OR</div>
                <div class="col-sm-5"><hr /></div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class ="font-weight-bolder text-dark">Email:</label>
              <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group">
              <label for="password" class ="font-weight-bolder text-dark">Password:</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group-remember-me">
              <div class="form-check form-check-inline">
                <input class="form-check-input c" type="checkbox" id="rememberMe" value="">
                <label class="form-check-label text-dark" for="remember">Remember Me</label>
              </div>
            </div>

            <button type="button" class="form-control btn btn-continue"><span class="font-weight-bolder">CONTINUE</span></button>

            <div class="log-in-separator-option">
              <div class="row">
                <div class="col-sm-12 text-center text-primary font-weight-bolder"><a  href="#">Forgot your password?</a></div>
              </div>
            </div>

            <div class="log-in-separator-option">
              <div class="row">
                <div class="col-sm-12 text-center text-primary font-weight-bolder"><hr /></div>
              </div>
            </div>

            <div class="log-in-separator-option">
              <div class="row">
                <div class="col-sm-12 text-center text-dark font-weight-normal">New to PawsOnMyWayHome?</div>
              </div>
            </div>

            <div class="log-in-separator-option">
              <div class="row">
                <div class="col-sm-12 text-center text-primary font-weight-bold"><a href="#">Sign up</a></div>
              </div>
            </div>

            
          </form>

      </div>
    </div>



  </div>
  <?php // include("includes/footer.php");?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>





