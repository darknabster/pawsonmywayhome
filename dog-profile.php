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
            <div class="profile-main-container active">
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

                <div class="adoption-form adoption-form-1 active">
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
                    <form id="adoption-form-2">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Adopter's E-mail *</label>
                                    <input type="email" class="form-control" id="adoptersEmail" name="adoptersEmail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone Number (Primary) * </label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="areaCode" name="areaCode">
                                    <span class="sub-details">Area Code</span>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
                                    <span class="sub-details">Phone Number</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Phone Type * </label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>cell </label>
                                        <input type="radio" class="form-control donation-check" id="phoneType" name="phoneType">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                     <div class="form-inline">
                                        <label>Home </label>
                                        <input type="radio" class="form-control donation-check" id="phoneType" name="phoneType">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>Work </label>
                                        <input type="radio" class="form-control donation-check" id="phoneType" name="phoneType">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="dog-profile-header-separator" />

                        <div class="form-group">
                            <label>Phone Number - Alternate 2 * </label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="areaCode2" name="areaCode2">
                                    <span class="sub-details">Area Code</span>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="phoneNumber2" name="phoneNumber2">
                                    <span class="sub-details">Phone Number</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Phone Type * </label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>cell </label>
                                        <input type="radio" class="form-control donation-check" id="phoneType2" name="phoneType2">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                     <div class="form-inline">
                                        <label>Home </label>
                                        <input type="radio" class="form-control donation-check" id="phoneType2" name="phoneType2">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>Work </label>
                                        <input type="radio" class="form-control donation-check" id="phoneType2" name="phoneType2">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="dog-profile-header-separator" />

                        <div class="form-group">
                            <label>names and ages of all permanent residents of tyour home (adults and children) *</label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nameAgesPermanentResidents">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Current pets in you home *</label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="5" cols="50"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Are all of the pets in you home spayed or neutered? *</label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="homeSpayedNeutered">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>List ALL of the animals you no longer have and what hanppened to them:  *</label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="animals">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Vet reference (please call you vet and give permission to release information to us) *</label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="5" cols="50"></textarea>
                                    <span class="sub-details">Vet name, address & phone numbner</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="adoption-form adoption-form-3">
                    <form id="adoption-form-2">
                        <div class="form-group">
                            <label>Are you planning to move in the near future? * </label>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <label>Yes </label>
                                        <input type="radio" class="form-control donation-check" id="planingToMove" name="planingToMove">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                     <div class="form-inline">
                                        <label>No </label>
                                        <input type="radio" class="form-control donation-check" id="planingToMove" name="planingToMove">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>If moving soon, to what city/state? *</label>
                                    <input type="text" class="form-control" id="movingCity" name="movingCity">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>What do you want to adopt a rescue dog at this time? *</label>
                                    <input type="text" class="form-control" id="rescueDog" name="rescueDog">
                                </div>
                            </div>
                        </div>

                        <hr class="dog-profile-header-separator" />

                        <div class="form-group">
                            <label>When will you be ready to adopt this dog? * </label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>Today</label>
                                        <input type="radio" class="form-control donation-check" id="readyToAdopt" name="readyToAdopt">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>This Weekend</label>
                                        <input type="radio" class="form-control donation-check" id="readyToAdopt" name="readyToAdopt">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>Within a week</label>
                                        <input type="radio" class="form-control donation-check" id="readyToAdopt" name="readyToAdopt">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-inline">
                                        <label>Within a amonth</label>
                                        <input type="radio" class="form-control donation-check" id="readyToAdopt" name="readyToAdopt">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-inline">
                                        <label>Not ready yet, just researching</label>
                                        <input type="radio" class="form-control donation-check" id="readyToAdopt" name="readyToAdopt">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Are you in contact with any other rescues or shelters about a specific dog? * </label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Yes, application is pending</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <input type="radio" class="form-control donation-check" id="rescueShelterSpecificDog" name="rescueShelterSpecificDog">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Yes, just an email inquiry, no app yet</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <input type="radio" class="form-control donation-check" id="rescueShelterSpecificDog" name="rescueShelterSpecificDog">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label>No, but I am looking at several dogs online</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <input type="radio" class="form-control donation-check" id="rescueShelterSpecificDog" name="rescueShelterSpecificDog">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label>No, I am only interested in this particular dog</label>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <input type="radio" class="form-control donation-check" id="rescueShelterSpecificDog" name="rescueShelterSpecificDog">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="dog-profile-header-separator" />


                         <div class="form-group">
                            <label>Are you going to meet another dog? *</label>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <label>Yes </label>
                                        <input type="radio" class="form-control donation-check" id="meetAnotherDog" name="meetAnotherDog">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                     <div class="form-inline">
                                        <label>No </label>
                                        <input type="radio" class="form-control donation-check" id="meetAnotherDog" name="meetAnotherDog">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>If so, when?</label>
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="ifSoWhen" name="ifSoWhen">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Is anyone in you home allergic to dogs? *</label>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <label>Yes </label>
                                        <input type="radio" class="form-control donation-check" id="allergicToDogs" name="allergicToDogs">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                     <div class="form-inline">
                                        <label>No </label>
                                        <input type="radio" class="form-control donation-check" id="allergicToDogs" name="allergicToDogs">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Does anyone in your home fear dogs? *</label>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <label>Yes </label>
                                        <input type="radio" class="form-control donation-check" id="fearToDogs" name="fearToDogs">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                     <div class="form-inline">
                                        <label>No </label>
                                        <input type="radio" class="form-control donation-check" id="fearToDogs" name="fearToDogs">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Does anyone in your home smoke? *</label>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <label>Yes </label>
                                        <input type="radio" class="form-control donation-check" id="homeSmoke" name="homeSmoke">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                     <div class="form-inline">
                                        <label>No </label>
                                        <input type="radio" class="form-control donation-check" id="homeSmoke" name="homeSmoke">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Are you familiar with dog regulations in your area? *</label>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-inline">
                                        <label>Yes </label>
                                        <input type="radio" class="form-control donation-check" id="dogRegulation" name="dogRegulation">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                     <div class="form-inline">
                                        <label>No </label>
                                        <input type="radio" class="form-control donation-check" id="dogRegulation" name="dogRegulation">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
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
    <script type="text/javascript" src="assets/js/dog-profile.js"></script>

    
  </body>
</html>
