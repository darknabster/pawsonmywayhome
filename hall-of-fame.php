<?php include("includes/configuration.php");?>
<!doctype html>
<html lang="en">
<head>
<?php include("includes/head-tag.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <!-- NAV BAR -->
    <?php include("includes/navigation.php");?>

    <!-- BANNER -->
    <div class="muttin-mixer-banner muttin-mixer-banner-bg">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 muttini-mixer-content" id="muttini-mixer-title">
                <h1>Muttini Mixer</h1>
                <p>
                  A night of art, raffles, drinks, and more!<br>
                  Proceeds to benefit PAWS On My Way Home Rescue
                </p>
            </div>
        </div>
    </div>

    <!-- BUY TICKET -->
    <div class="buy-ticket">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ticket-header">
          <h1>
            Buy your tickets now
          </h1>
          <p>
            for annual Muttini Mixer to be held at:
          </p>
        </div>
        <div class="social-btns">
          <button class="facebook-btns" onclick="window.location.href = 'https://www.facebook.com/OnMyWayHomeRescue';">Facebook</button>
          <button class="email-btns">Email</button>
          <button class="twitter-btns">Twitter</button>
        </div>
      </div>
    </div>

    <!-- UPCOMING EVENTS -->
    <div class="muttini-upcoming-events">
      <div class="container">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 muttini-upcoming-img">
            <img src="/paws/assets/images/muttini-mixer-event.jpg">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 muttini-upcoming-content">
            <h1>Upcoming Events:</h1>
            <span class="upcoming-event-title">Muttini Mixer</span>
            <span class="upcoming-event-date">November 17, 2018</span>
            <span class="upcoming-event-time">7 p.m. to 10 p.m.</span>
            <p>
              William Carr Gallery, Grand Canal Shoppes, Palazzo hotel<br>
              3327 Las Vegas Boulevard South, Suite 2732<br>
              Las Vegas, Nevada
            </p>
            <a href="">EARLY BIRD TICKETS: $45 EACH</a>
            <a href="">TICKETS AT DOOR: $50 EACH</a>
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