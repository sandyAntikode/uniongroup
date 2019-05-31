<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>
    <?php include($prefix."include/tracking-script/head.php"); ?>
  </head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/css/intlTelInput.css">
  <meta name="google-signin-client_id" content="427231354865-m709eoc6gtd24rdf7736akmqk9v0qu0v.apps.googleusercontent.com">
  <body>
    <?php include($prefix."include/tracking-script/body.php"); ?>

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> 
    
    <?php include($prefix."include/cover.php"); ?>

    <style type="text/css">
      .abcRioButton {
        box-shadow: none !important;
      }
      .abcRioButtonLightBlue {
        width: 235px !important;
      }

      .abcRioButtonContents span {
        opacity: 0;
      }
      .abcRioButtonContents {
        position: relative !important;
        display: block;
      }
      .abcRioButtonContents::before {
        content: "REGISTER WITH GOOGLE" !important;
        position: absolute !important;
        left: 35px !important;
        top: 0 !important;
        color: black;
        font-weight: 600;
        font-size: .7rem;
        letter-spacing: .9px;
      }
      .btn-login-with {
        position: relative;
        width: 100%;
        display: block;
        padding: 1rem 0rem 2rem 0rem;
      }
      .btn-wrapper {
        position: absolute;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
      }
    </style>

    <section class="py-5 section-img-pattern">
      <div class="container container-md">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="headersing text-center animated fadeInUp">
              <h4>Register</h4>
            </div>
            <div class="btn-login-with">
                <div class="btn-wrapper">
                  <div class="g-signin2 ada" data-onsuccess="onSignIn">
                  </div> 
                </div> 
              </div>
              <div class="section-limiter">
                <div class="section-limiter-content">
                  <p class="mb-0">Or</p>
                </div>
              </div>
            <div class="section-form-content">
              <form class="needs-validation mb-3" novalidate id="form-register" method="POST" action="<?php echo $prefix.'otp/index.php';?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-4 animated fadeInUp delayp3">
                      <label for="">Mobile number</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text form-control bg-white" id="basic-addon1">+62</span>
                        </div>
                        <input type="number" class="form-control" placeholder="85712xxxx" name="phone" value="" id="numberPhone" required="">
                        <div class="phone-alert w-100"></div>
                        <div class="invalid-feedback">
                          Please phone Number
                        </div>
                      </div>
                      <div class="float-right font-size-md mt-1" data-toggle="modal" data-target="#overseasNumber">
                        <a href="#" class="text-gray-800" data-toggle="modal" data-target="#overseasNumber">Using overseas number?</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group animated fadeInUp delayp4">
                      <label for="">Email Address</label>
                      <input type="email" class="form-control" id="emailAddress" placeholder="Enter your email address" name="email" value="" required>
                      <div class="invalid-feedback position-absolute">
                        Please enter Email
                      </div>
                    </div>
                  </div>
                  <input type="hidden" id="google_id" name="google_id" value="">
                  <input type="hidden" id="register_id" name="register_id" value="">
                  <div class="col-md-12 mt-2 mb-2 vp-fadeinup">
                    <small class="text-gray-400">By registering, you agree to our <a href="<?php echo $prefix;?>tnc" class="text-gray-800">Terms of Service</a> & <a href="<?php echo $prefix;?>privacypolicy" class="text-gray-800">Privacy Policy.</a></small>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-custom vp-fadeinup" type="submit">Register</button>

                    <!-- <a href="<?php echo $prefix;?>otp" class="btn btn-custom vp-fadeinup" id="sendRegister">Register</a> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <?php include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/utils.js"></script>

    <script>
      // Animation on load
      document.addEventListener("DOMContentLoaded", function(event) {
        $(".loader").fadeOut('slow');
        $(".loader-wrapper").fadeOut("slow");
      //  $(".anim-1").addClass("animated fadeInLeft delayp10");
       // $(".anim-2").addClass("animated fadeInUp delayp12");
        //$(".anim-3").addClass("animated fadeInUp delayp14");  
      });
      
      
    </script>
  </body>
</html>
