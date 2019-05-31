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
              <form class="needs-validation mb-4" novalidate id="form-step-three" action="<?php echo $prefix.'register/register-final/index.php';?>" method="POST">
                <div class="row section-form-step-inner">
                  <div class="col-md-12 mb-5">
                    <div class="heading-w-link animated fadeInUp">
                      <h4>Create a Password</h4>
                      <a>3 of 3</a>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-4 animated fadeInUp delayp1">
                      <label for="">Password</label>
                      <input type="password" class="form-control" placeholder="Enter your password" value="" required id="password" name="password">
                      <div class="invalid-feedback position-absolute">
                        Please enter Password
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group animated fadeInUp delayp2">
                      <label for="">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm_password" placeholder="Enter your password" value="" required name="confirm_password">
                      <div id='message' class="mt-2"></div>
                      <div class="invalid-feedback position-absolute">
                        Please enter Password
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-2 animated fadeInUp delayp3">
                    <button class="btn btn-custom" type="submit" id="btnSubmit" disabled="">Finish</button>
                    <!-- <a href="<?php echo $prefix;?>register/register-final" class="btn btn-custom">Finish</a> -->
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

      var token = '<?php echo $_SESSION['token'];?>';
      var firstNameSend = '<?php echo $_SESSION['register']['firstname'];?>';
      var lastNameSend = '<?php echo $_SESSION['register']['lastname'];?>';
      var dobSend = '<?php echo strtotime($_SESSION['register']['birthday']);?>';
      var genderSend = '<?php echo $_SESSION['register']['gender'];?>';
      var idRegister = '<?php echo $_SESSION['register']['register_id'];?>';
      var password = $('#password').val();
      var confirmPassword = $('#confirm_password').val();
      var redirect = '<?php echo ($_SESSION['redirect'] ? $_SESSION['redirect'] : null);?>';

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
                sendData();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      function sendData() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        $.ajax({
          url: "<?php echo $prefix;?>include/ajax_register_finale.php",
          type: 'POST',
          data: {
            'first_name': firstNameSend,
            'last_name': lastNameSend,
            'dob': dobSend,
            'gender': genderSend,
            'password': password,
            'confirm_password': confirmPassword,
            'token': token,
            'id_register': idRegister
          },
          complete: function(response) {

            if (JSON.parse(response.responseText).meta.status) {
              if(redirect){
                window.location.href = "<?php echo $_SESSION['redirect'];?>";
              }else{
                window.location.href = "<?php echo $prefix;?>register/register-final/index.php";
              }
            }else {
              console.log(JSON.parse(response.responseText).meta.message);
            }
          }
        });
      }

      $('#password, #confirm_password').on('keyup', function () {
          if ($('#password').val() !== $('#confirm_password').val()) {
              $('#message').html('Make sure the password match').css('color', 'red');
              $("#btnSubmit").attr("disabled", true);
              
          } else {
            $('#message').addClass("d-none");
            $("#btnSubmit").attr("disabled", false);
          }   
      });


      $(".startdate").datepicker({
        dateFormat: 'dd/mm/y',
        changeMonth: true,
        changeYear: true
      });

    </script>
  </body>
</html>
