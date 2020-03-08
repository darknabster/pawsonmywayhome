<?php include("includes/configuration.php");?>
<!doctype html>
<html lang="en">
<head>
<?php include("includes/head-tag.php");?>
</head>
<body>
    <!-- NAV BAR -->
    <?php include("includes/navigation.php");?>

    <!-- BANNER -->
    <div class="cause-banner-img">
        <div class="container">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 empty-space">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 donate-for" id="donate-adopt">
                <div class="adopt-me">
                    <span class="current-amount">$1360.00</span>
                    <span>Raised of <span class="target-amount">$2,760</span> target</span>
                </div>
                <div class="featured-cause-buttons">
                    <button class="donate-now-btn" onclick="window.location.href = '/paws/donation.php';">DONATE NOW</button>
                    <button class="share-btn">SHARE</button>
                    <hr class="divider">
                    <button class="adopt-me-btn">ADOPT ME</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DOG PROFILE -->
    <div class="dog-profile-main" id="dog-profile">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 dog-profile-container">
                <div class="wrapper">
                    <span class="dog-pic"></span>
                    <span class="dog-name">Kelly Kelly</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 fundraising-event-info">
                <div class="wrapper">
                    <h2><span></span>Love Pets Page</h2>
                    <p>Fundraising for pets in need</p>
                    <div class="dog-other-info">
                        <div class="dog-event">
                            <span class="event-title">Event:</span><span class="event-name">Love Pets:</span><span class="event-date">04 Apr 2019</span>
                        </div>
                        <div class="dog-website">
                            <span class="web-title">Website:</span><span class="event-link">lp.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 charity-reg">
                <h4>Pets In Need</h4>
                <p>Charity Registration No. <span class="charity-reg-no">12345678</span></p>
            </div>
        </div>
    </div>

    <!-- divider -->
    <div class="adopt-divider">
        <div class="container">
            <hr>
        </div>
    </div>

    <!-- DOG STORY -->
    <div class="dog-profile-main" id="dog-profile">
        <div class="container">
            <div class="col-lg-8">
                <h4>
                    Story
                </h4>
                <p>
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("includes/footer.php");?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>





