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
    <div class="adoptable-animals-banner adoptable-animals-banner-bg">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 adoptable-animal-title" id="adoptable-header-title">
                <h1>Adoptable Animals</h1>
            </div>
        </div>
    </div>

    <!-- ADOPTABLES -->
    <div class="adoptable-pets">
        <div class="container">
            <div class="row adoptable-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 adoptable-title">
                    <h2>Some of our adorable adoptables:</h2>
                </div>
                <div class="social-btns">
                    <button class="facebook-btns" onclick="window.location.href = 'https://www.facebook.com/OnMyWayHomeRescue';">Facebook</button>
                    <button class="email-btns">Email</button>
                    <button class="twitter-btns">Twitter</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1a" name="carousel[]" checked>
                            <input type="radio" id="carousel-2a" name="carousel[]">
                            <input type="radio" id="carousel-3a" name="carousel[]">
                            <input type="radio" id="carousel-4a" name="carousel[]">
                            <input type="radio" id="carousel-5a" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1a"></label>
                            <label for="carousel-2a"></label>
                            <label for="carousel-3a"></label>
                            <label for="carousel-4a"></label>
                            <label for="carousel-5a"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1a"></label>
                           <label for="carousel-2a"></label>
                           <label for="carousel-3a"></label>
                           <label for="carousel-4a"></label>
                           <label for="carousel-5a"></label>
                         </div>
                        <!--  <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1b" name="carousel[]" checked>
                            <input type="radio" id="carousel-2b" name="carousel[]">
                            <input type="radio" id="carousel-3b" name="carousel[]">
                            <input type="radio" id="carousel-4b" name="carousel[]">
                            <input type="radio" id="carousel-5b" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1b"></label>
                            <label for="carousel-2b"></label>
                            <label for="carousel-3b"></label>
                            <label for="carousel-4b"></label>
                            <label for="carousel-5"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1b"></label>
                           <label for="carousel-2b"></label>
                           <label for="carousel-3b"></label>
                           <label for="carousel-4b"></label>
                           <label for="carousel-5b"></label>
                         </div>
                         <!-- <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1c" name="carousel[]" checked>
                            <input type="radio" id="carousel-2c" name="carousel[]">
                            <input type="radio" id="carousel-3c" name="carousel[]">
                            <input type="radio" id="carousel-4c" name="carousel[]">
                            <input type="radio" id="carousel-5c" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1c"></label>
                            <label for="carousel-2c"></label>
                            <label for="carousel-3c"></label>
                            <label for="carousel-4c"></label>
                            <label for="carousel-5c"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1c"></label>
                           <label for="carousel-2c"></label>
                           <label for="carousel-3c"></label>
                           <label for="carousel-4c"></label>
                           <label for="carousel-5c"></label>
                         </div>
                         <!-- <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1d" name="carousel[]" checked>
                            <input type="radio" id="carousel-2d" name="carousel[]">
                            <input type="radio" id="carousel-3d" name="carousel[]">
                            <input type="radio" id="carousel-4d" name="carousel[]">
                            <input type="radio" id="carousel-5d" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1"></label>
                            <label for="carousel-2"></label>
                            <label for="carousel-3"></label>
                            <label for="carousel-4"></label>
                            <label for="carousel-5"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div>
                         <!-- <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1e" name="carousel[]" checked>
                            <input type="radio" id="carousel-2e" name="carousel[]">
                            <input type="radio" id="carousel-3e" name="carousel[]">
                            <input type="radio" id="carousel-4e" name="carousel[]">
                            <input type="radio" id="carousel-5e" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1e"></label>
                            <label for="carousel-2e"></label>
                            <label for="carousel-3e"></label>
                            <label for="carousel-4e"></label>
                            <label for="carousel-5e"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1e"></label>
                           <label for="carousel-2e"></label>
                           <label for="carousel-3e"></label>
                           <label for="carousel-4e"></label>
                           <label for="carousel-5e"></label>
                         </div>
                         <!-- <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck5">
                                <label class="tab-label" for="chck5">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1f" name="carousel[]" checked>
                            <input type="radio" id="carousel-2f" name="carousel[]">
                            <input type="radio" id="carousel-3f" name="carousel[]">
                            <input type="radio" id="carousel-4f" name="carousel[]">
                            <input type="radio" id="carousel-5f" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1f"></label>
                            <label for="carousel-2f"></label>
                            <label for="carousel-3f"></label>
                            <label for="carousel-4f"></label>
                            <label for="carousel-5f"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1f"></label>
                           <label for="carousel-2f"></label>
                           <label for="carousel-3f"></label>
                           <label for="carousel-4f"></label>
                           <label for="carousel-5f"></label>
                         </div>
                         <!-- <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck6">
                                <label class="tab-label" for="chck6">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1g" name="carousel[]" checked>
                            <input type="radio" id="carousel-2g" name="carousel[]">
                            <input type="radio" id="carousel-3g" name="carousel[]">
                            <input type="radio" id="carousel-4gg" name="carousel[]">
                            <input type="radio" id="carousel-5" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1g"></label>
                            <label for="carousel-2g"></label>
                            <label for="carousel-3g"></label>
                            <label for="carousel-4g"></label>
                            <label for="carousel-5g"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1g"></label>
                           <label for="carousel-2g"></label>
                           <label for="carousel-3g"></label>
                           <label for="carousel-4g"></label>
                           <label for="carousel-5g"></label>
                         </div>
                        <!--  <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck7">
                                <label class="tab-label" for="chck7">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1h" name="carousel[]" checked>
                            <input type="radio" id="carousel-2h" name="carousel[]">
                            <input type="radio" id="carousel-3h" name="carousel[]">
                            <input type="radio" id="carousel-4h" name="carousel[]">
                            <input type="radio" id="carousel-5h" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1h"></label>
                            <label for="carousel-2h"></label>
                            <label for="carousel-3h"></label>
                            <label for="carousel-4h"></label>
                            <label for="carousel-5h"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1h"></label>
                           <label for="carousel-2h"></label>
                           <label for="carousel-3h"></label>
                           <label for="carousel-4h"></label>
                           <label for="carousel-5h"></label>
                         </div>
                         <!-- <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div> -->
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck8">
                                <label class="tab-label" for="chck8">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adoptable-animals">
                    <div class="col" id="adoptable-slider">
                        <div class="carousel">
                            <input type="radio" id="carousel-1" name="carousel[]" checked>
                            <input type="radio" id="carousel-2" name="carousel[]">
                         <input type="radio" id="carousel-3" name="carousel[]">
                            <input type="radio" id="carousel-4" name="carousel[]">
                            <input type="radio" id="carousel-5" name="carousel[]">
                            <ul class="carousel__items">
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet1.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet2.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet3.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet4.jpg" alt=""></li>
                                <li class="carousel__item"><img src="/paws/assets/images/sponsor-pet5.jpg" alt=""></li>
                            </ul>
                         <div class="carousel__prev">
                            <label for="carousel-1"></label>
                            <label for="carousel-2"></label>
                            <label for="carousel-3"></label>
                            <label for="carousel-4"></label>
                            <label for="carousel-5"></label>
                         </div>
                         <div class="carousel__next">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div>
                         <div class="carousel__nav">
                           <label for="carousel-1"></label>
                           <label for="carousel-2"></label>
                           <label for="carousel-3"></label>
                           <label for="carousel-4"></label>
                           <label for="carousel-5"></label>
                         </div>
                       </div>
                    </div>
                    <div class="col">
                        <div class="tabs">
                            <div class="tab">
                                <input type="checkbox" id="chck9">
                                <label class="tab-label" for="chck9">Item 1</label>
                                <div class="tab-content">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                                </div>
                            </div>
                        </div>
                    </div>
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