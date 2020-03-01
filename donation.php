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
      <div class="donation-header-container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="./"><span class="header-title font-weight-bolder">PawsOnMyWayHome</span></a>
        </nav>
        
        <nav class="navbar navbar-donate-to navbar-light">
            <div class="row">
              <img class="donate-to-icon" src="assets/images/b.jpg">
            </div>
            <div class="row">
              <p class="donate-to-description text-center text-dark font-weight-bolder"> Donate to Kelly Kelly <br />
                   Fundraising for Pets In Need 
              </p>
            </div>
            <div class="row">
              <button type="button" class="btn btn-light btn-lg btn-donate-logo">Logo</button>
            </div>
        </nav>
        <nav class="navbar navbar-user-profile navbar-light">
            <img class="user-profile-icon" src="assets/images/user-icon.png">
            Aaron O'Driscoll
        </nav>
        </div>
        <hr style="margin:0" />
      </div>
    </div>
  </div>
  <div class="row row-bottom">
    <div class="donation-container donation-amount-container show-container">
      <div class="main-content">
        <div class="donation-title">Donation Amount</div>
          <form>
            <div class="donation-amount-option-container">
              <button type="button" class="btn-donation-amnt" value="10"> <span class="selected-curency">$</span>10</button>
              <button type="button" class="btn-donation-amnt selected" value="20"> <span class="selected-curency">$</span>20</button> 
              <button type="button" class="btn-donation-amnt" value="50"> <span class="selected-curency">$</span>50</button> 
              <button type="button" class="btn-donation-amnt" value="100"> <span class="selected-curency">$</span>100</button>                
            </div>

            <div class="donation-amount-option-container">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text selected-curency" id="">$</div>
                </div>
                <input type="text" class="form-control donation-amount-group donation-amount" aria-label="" aria-describedby="btnGroupAddon" value="20">
                <select class="form-control donation-amount-group currency-select-option text-dark"><option value = "$">USD</option><option value="₱">PHP</option><option value="¥">JPY</option></select>
              </div>
            </div>
             
            
            <div class="form-group">
              <label  class ="font-weight-normal text-dark">PawsOnMyWayHome won't be charging a fee to the charity. adding a small contribution
                 on top of your donation means we can continue to help more animals.
              </label>
            </div>

            <div class="form-group">
              <label  class ="font-weight-bold text-dark">Find out how</label>
              <select class="form-control text-dark donation-percentage"><option >10% ($ 5.00)</option></select>
            </div>
            <div class="form-group-remember-me">
              <div class="form-check form-check-inline">
                <input class="form-check-input c" type="checkbox" id="rememberMe" value="">
                <label class="form-check-label text-dark" for="remember">Hide my amount from public view</label>
              </div>
            </div>

            <div class="donation-amount-option-payment-container">
              <button type="button" class="btn-donation-payment-type selected" value="10"> One-time</button>
              <button type="button" class="btn-donation-payment-type " value="20"> Monthly</button>                 
            </div>

            <button type="button" class="form-control btn btn-continue" id="btnContinueDonationAmount"><span class="font-weight-bolder">CONTINUE</span></button>

            <div class="col-sm-12 text-center text-dark font-weight-bolder donation-total-amount">Total amount: 0.00</div>
            
          </form>

      </div>
    </div>

    <div class="donation-container donation-payment-container">
      <div class="main-content">
        <div class="donation-title">Payment Method</div>
          <form>
            <div class="donation-payment-logo-container">
              <img class="donation-payment-logo" src="assets/images/visa-master-card.jpg">           
            </div>

            <div class="form-group">
              <label for="Card number" class ="font-weight-bolder text-dark">Card Number *</label>
              <input type="text" class="form-control" id="cardNumber">
            </div>

            <div class="form-group">
              <label for="card holder name" class ="font-weight-bolder text-dark">Cardholder name (as it appears on card) </label>
              <input type="text" class="form-control" id="cardHolderName">
            </div>

            <div class="row">
              <div class="col-sm-8">
                <label for="expiry date" class ="font-weight-bolder text-dark">Expiry Date</label>
                <div class="form-group row">
                  <div class="col-sm-6"><input type="text" class="form-control" id="expiryDataMonth"></div>
                  <div class="col-sm-6"><input type="text" class="form-control" id="expiryDataYear"></div>
                </div>
              </div>
                <div class="col-sm-4"><label for="security code" class ="font-weight-bolder text-dark">Security code</label>
                  <input type="text" class="form-control" id="securityCode">
                </div>
            </div>

            <div class="row">
              <div class="col-sm-4"><label for="zip postal code" class ="font-weight-bolder text-dark">Zip/postal code</label>
                  <input type="text" class="form-control" id="postalCode">
                </div>
            </div>
        
            <div class="form-group-remember-me">
              <div class="form-check form-check-inline">
                <input class="form-check-input " type="checkbox" id="savePaymentDetails" value="">
                <label class="form-check-label text-dark" for="save-payment-details">save my payment details for next time</label>
              </div>
            </div>

            

            <button type="button" class="form-control btn btn-continue" id="btnContinueDonationPayment"><span class="font-weight-bolder">CONTINUE</span></button>
            
          </form>

      </div>
    </div>
    
    <div class="donation-container donation-message-container">
      <div class="main-content">
        <div class="donation-title">Your Message</div>
          <form>

            <div class="form-group">
              <textarea class="form-control" id="yourMessage" rows="7" placeholder="Whats you message of support for PawsOnMyWayHome"></textarea>
            </div>


            <div class="row">
              
                <div class="col-sm-1">
                  <img class="user-profile-icon" src="assets/images/user-icon.png">
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="userAcoutName" value="Aaron O'Driscoll" disabled>
              </div>
            </div>

            <div class="form-group-remember-me">
              <div class="form-check form-check-inline">
                <input class="form-check-input " type="checkbox" id="hideAccount" value="">
                <label class="form-check-label text-dark" for="hide account from public view">Hide my account from public view</label>
              </div>
            </div>

            <button type="button" class="form-control btn btn-continue" id ="btnContinueDonationMessage"><span class="font-weight-bolder">CONTINUE</span></button>

            <div class="row">
              <div class="col-sm-12 text-center skip-message-container font-weight-bolder"><a  href="#" class="text-primary">Skip message</a></div>
            </div>
            
          </form>

      </div>
    </div>

    <div class="donation-container donation-success-container">
      <div class="main-content">
        <div class="donation-title">Finished</div>
          <form>
            <div class="success-icon-container">
              <img class="success-icon" src="assets/images/success-icon.png">
            </div>

            <div class="success-description-container">
              <div class="donation-success-description">Thank you for your donation</div>
            </div>
            

            <button type="button" class="form-control btn btn-continue" id="btnReturnHomepage"><span class="font-weight-bolder">RETURN TO HOMEPAGE</span></button>

            
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
  <script type="text/javascript" src="assets/js/donation.js"></script>
</body>
</html>





