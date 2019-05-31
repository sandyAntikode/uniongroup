<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <?php include($prefix."include/tracking-script/head.php"); ?>
    <?php include($prefix."include/register-controller.php"); ?>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <?php include($prefix."include/tracking-script/body.php"); ?>

    <?php include($prefix."include/navbar.php"); ?>
    <?php include($prefix."include/cover.php"); ?>
    
    <section class="py-5 section-img-pattern section-form-step">
      <div class="container container-md">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="section-form-content">
              <form class="needs-validation mb-4" id="form-step-two" novalidate action="<?php echo $prefix.'register/step-3/index.php';?>" method="POST">
                <div class="row section-form-step-inner">
                  <div class="col-md-12 mb-5">
                    <div class="heading-w-link animated fadeInUp">
                      <h4>Additional Information</h4>
                      <a>2 of 3</a>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-4 animated fadeInUp delayp1">
                      <label for="">Date of Birth</label>
                      <div class="input-group date">
                          <div class="input-group">
                            <input type="text" class="form-control birthday" placeholder="(MM/DD/YYYY)" size="30" value="" name="birthday" required id="date-birthday" autocomplete="off"/>
                            <!-- <div class="input-group-prepend">
                              <span class="input-group-text bg-white border-0 font-size-xl" id="inputGroupPrepend"><i class="fal fa-calendar-alt"></i></span>
                            </div> -->
                            <div class="invalid-feedback">
                              Please choose a username
                            </div>
                          </div>
                      </div>
                      <div class="invalid-feedback position-absolute">
                        Please enter Date of Birth
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group animated fadeInUp delayp2">
                      <label for="">Gender</label>
                      <select class="custom-select border-0" id="gender-select" placeholder="Enter your last name" value="" required id="gender" name="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                      <div class="invalid-feedback position-absolute">
                        Please enter Gender
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-4 animated fadeInUp delayp3">
                    <button class="btn btn-custom" type="submit">Next</button>
                    <!-- <a href="<?php echo $prefix;?>register/step-3" class="btn btn-custom">Next</a> -->
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
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
      // Navbar active state
      // $('#navHome').addClass('active');

      // Animation on load
      document.addEventListener("DOMContentLoaded", function(event) {
        $(".loader").fadeOut('slow');
        $(".loader-wrapper").fadeOut("slow");
        //$(".anim-1").addClass("animated fadeInLeft delayp10");
        //$(".anim-2").addClass("animated fadeInUp delayp12");
        //$(".anim-3").addClass("animated fadeInUp delayp14");  
      });

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }else {
                event.preventDefault();
                $("#form-step-two").submit();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      $("#buttonOne").click(function() {
        $("#tab-form-2").tab('show');
      })

      $("#buttonTwo").click(function() {
        $("#tab-form-3").tab('show');
      })

      // $('#dateOfBirth').datepicker();


      $(".birthday").datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: '-65:-10'
      });

    </script>
  </body>
</html>
