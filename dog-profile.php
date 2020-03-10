<?php include("includes/configuration.php");?>
<!doctype html>
<html lang="en">
  <head>
    <?php include("includes/head-tag.php");?>
    

  </head>
  <body>

    <?php include("includes/navigation.php");?>


  <div class="cover-photo-container">
      <div class="cover-photo"></div>
  </div>
  <div class="details-main-container">
      <div class="details-container">
            <div class="row ">
                <div class="col-sm-1">
                    <div class="owner-container">
                        <img class="owner-img" src="assets/images/user-icon.png">
                        <label class="owner-name text-center">Kelly Kelly</label>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="owner-container">
                        <label class="owner-title-header">This Lovely Dog</label>
                        <label class="owner-tagline">Nice tagline about this sweet pup</label>
                        <div class="owner-more-event-details">
                            <div class="row ">
                                <div class="col-sm-4">
                                    <label>Event: Love Pets: 04 Apr 2019</label>
                                </div>
                                <div class="col-sm-4">
                                    <label>Website: Ip.com</label>
                                </div>
                                <div class="col-sm-4">
                                    <label>Charity Registration No. 12345678</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="owner-container">
                        <button class="dog-profile-btn btn-share"> SHARE</button>
                        <button class="dog-profile-btn btn-adopt"> ADOPT ME</button>
                    </div>
                </div>
            </div>
            <hr class="dog-profile-header-separator" />
            <div class="profile-main-container">
                <div class="profile-container">
                    <h3 class="dog-profile-title"> Profile</h3>
                    <label class="dog-profile-details"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</label>
                </div>
                <div class="photos-container">
                    <h3 class="dog-profile-title"> Photos</h3>
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                    <img class="dog-profile-photo" src="assets/images/dog-profile-photo.jpg">
                </div>
            </div>

            <div class="adopt-main-container">
                <div class="adoption-details">
                    <p>Congratulations on your interest in adopting an animal throug our rescue! We work very hard to carefully match the right family with the right animal so that a forever connection is made. Your next step in the adoption process will be to complete an adoption application. After your application is received, you will be contacted by a member of our adoption team in order to discuess your application and possibly schedule a home visit with the animal you are interested in adopting.</p>
                    <ol> Before completing the application, please consider the following:
                        <li>Is your yard secure enought to prevent an animal from escaping you yard?</li>
                        <li>Is everyone in your home in agreement about adopting an animal?</li>
                        <li>Are you prepared to take on the responsibility of an animal for up to 15 or more years?</li>


                    </ol>
                    <ol>If you answered yes to each of the above questions, please follow the link below to complete your adoption application.</ol>

                    <p>(**If you are using a mobile device and would like to complete the form for this page, you may need to switch to "Web View" in order to view and compete the form.)</p>
                </div>

                <div class="adoption-form adoption-form-1">
                    <form id="adoption-form-1">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name *</label>
                                    <input type="text" class="form-control" id="firstName">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name *</label>
                                    <input type="text" class="form-control" id="lastName">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name of the animal you want to adopt *</label>
                                    <input type="text" class="form-control" id="animalName">
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label >Adopter's Name *</label>
                                    <input type="text" class="form-control" id="adopterName">
                                </div>
                            </div>
                        </div>
                        <hr class="dog-profile-header-separator" />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Adopter's Age</label>
                                    <input type="text" class="form-control" id="adopterAge">
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Spouse's Name</label>
                                    <input type="text" class="form-control" id="spouseName">
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Spouse's Age</label>
                                    <input type="text" class="form-control" id="adopterage">
                                </div>
                            </div>
                        </div>
                        <hr class="dog-profile-header-separator" />
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" id="city">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" id="state">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" id="zipcode">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="adoption-form adoption-form-2">
                    
                </div>

                <div class="adoption-form adoption-form-3">
                    
                </div>
                
                <div class="btn-adoption-container">
                    <button type="button" class="btn-adoption">CONTINUE</button>
                </div>

            </div>
      </div>
  </div>


  

    <?php include("includes/footer.php");?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
  </body>
</html>
