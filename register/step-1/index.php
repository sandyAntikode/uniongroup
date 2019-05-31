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
              <form class="needs-validation mb-4" id="form-step-one" novalidate action="<?php echo $prefix.'register/step-2/index.php';?>" method="POST">
                <div class="row section-form-step-inner">
                  <div class="col-md-12 mb-5 animated fadeInUp">
                    <div class="heading-w-link">
                      <h4>Personal Data</h4>
                      <a>1 of 3</a>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-4 animated fadeInUp delayp1">
                      <label for="">First Name</label>
                      <input type="text" class="form-control" placeholder="Enter your first name" value="" required id="firstname" name="firstname">
                      <div class="invalid-feedback position-absolute">
                        Please enter First Name
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group animated fadeInUp delayp2">
                      <label for="">Last Name</label>
                      <input type="text" class="form-control" placeholder="Enter your last name" value="" required id="lastname" name="lastname">
                      <div class="invalid-feedback position-absolute">
                        Please enter Last Name
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-4 animated fadeInUp delayp3">
                    <button class="btn btn-custom" type="submit" id="">Next</button>
                    <!-- <a href="<?php echo $prefix;?>register/step-2" class="btn btn-custom">Next</a> -->
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
      //  $(".anim-1").addClass("animated fadeInLeft delayp10");
       // $(".anim-2").addClass("animated fadeInUp delayp12");
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
                $("#form-step-one").submit();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      // $('#dateOfBirth').datepicker();s

      $(".startdate").datepicker({
        dateFormat: 'dd/mm/y',
        changeMonth: true,
        changeYear: true
      });

    </script>
  </body>
</html>
