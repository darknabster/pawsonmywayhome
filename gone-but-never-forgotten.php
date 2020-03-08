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
    <div class="never-forgotten-banner never-forgotten-banner-bg">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 never-forgotten-title" id="never-forgotten-title">
                <h1>Gone but never forgotten</h1>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="never-forgotten-content">
    	<div class="container">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 never-forgotten-content-title">
    			<h2>Forever in our hears</h2>
    			<p>
    				On this page, we celebrate the lives of the animals that we have been able to successfully help and also mourn the lives of those precious souls that we were only able to provide a soft landing.
    			</p>
    		</div>
    	</div>
    </div>

    <!-- CAROUSEL -->
    <section>
        <div class="carousel-contents">
            <div class="container">
                <h1>Friendship knows no boundaries</h1>
                <p>Join over 22 million people supporting charity and personal causes</p>
            </div>
        </div>
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"></div>
                <div id="target" class="carousel-item"></div>
                <div class="carousel-item"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- GALLERY -->
    <div class="never-forgotten-gallery">
		<div class="container">
			<div class="row">
				<p>
					Ozzie was a very old dachshund with poor eyesight but so much love to give. He was hospice only and passed away peacefully in the care of his foster mom.
				</p>
			</div>
		  <div class="row">


		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		      <a class="thumbnail" href="#">
		        <img class="img-responsive" src="/paws/assets/images/sponsor-pet1.jpg" alt="">
		      </a>
		    </div>
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