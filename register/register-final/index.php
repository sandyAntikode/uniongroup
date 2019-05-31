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
  </head>
  <body>
    <?php include($prefix."include/tracking-script/body.php"); ?>

    <?php include($prefix."include/navbar.php"); ?>
    <?php include($prefix."include/cover.php"); ?>
    
    <section class="py-5 section-img-pattern">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 col-lg-8 offset-lg-2 col-xl-4 offset-xl-4">
            <div class="section-form-content mb-3">
              <div class="section-register-final text-center">
                <div class="inner-img text-center mb-3 animated fadeInUp">
                  <img src="<?php echo $prefix;?>assets/img/common/img_spark.png" class="img-fluid" alt="spark">
                  <img src="<?php echo $prefix;?>assets/img/brand/ic_badge_silver.png" class="img-fluid img-tier" alt="medal">
                </div>
                <h6 class="animated fadeInUp">CONGRATULATIONS!</h6>
                <p class="px-5 text-gray-400 font-size-md animated fadeInUp">You are now a Silver Member of The Union Group U+Rewards.</p>
                <a href="https://itunes.apple.com/us/app/the-union-group/id1445510338?mt=8" target="_blank" class="img-download">
                  <img src="<?php echo $prefix;?>assets/img/common/button_appstore.png" target="_blank" class="mb-3" alt="Download Apps Store">
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.uniongroup.union" target="_blank" class="img-download">
                  <img src="<?php echo $prefix;?>assets/img/common/button_playstore.png" class="mb-3" alt="Download Play Store">
                </a>
                <div class="d-block">
                  <a href="https://uniongroupjakarta.com/home/" class="btn btn-custom mt-3">Ok</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

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

      $("#btn-oke").click(function () {
        window.localStorage.clear();
      })

    </script>
    <?php session_destroy();?>
  </body>
</html>
