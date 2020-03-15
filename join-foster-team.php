<?php include("includes/configuration.php");?>
<!doctype html>
<html lang="en">
<head>
    <?php include("includes/head-tag.php");?>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>

    <?php include("includes/navigation.php");?>

    <header class="sponsor-bg">
        <div class="container">
            <div class="center-content">
              <h1>Adoptable an Animal</h1>
          </div>
      </div>
  </header>

  <div class="sponsor-content">
    <div class="container">
        <h2>Join Our Foster Team</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
</div>

<div class="registration-main-container">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>* Name</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="firstName" placeholder="Firstname">
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="lastname" placeholder="Lastname">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>* Address</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="streetAddress" placeholder="Street Address">
            </div>
           
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <select class="form-control country-list"><option>Select Country</option></select>
            </div>
            <div class="col-sm-5">
                <select class="form-control state-list"><option>Select State/Provice</option></select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <select class="form-control city-list"><option>Select City</option></select>
            </div>
            <div class="col-sm-5">
                 <input type="text" class="form-control" id="postalCode" placeholder="Postal Code">
            </div>

        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>* Phone</label>
            </div>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>* Phone</label>
            </div>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
    </div>

     <div class="form-group">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-join-foster-team">Join now</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    
    
</div>

<div class="placeholder"></div>
<?php include("includes/footer.php");?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
