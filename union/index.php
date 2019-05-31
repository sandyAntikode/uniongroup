<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<meta name="page" content="home" initial="home">
<!--<![endif]-->
<head>
  <?php $prefix = "../";?>
  <?php include $prefix . "include/head.php";?>
</head>
<body>
    <div class="loader-wrapper loader-light">
        <div class="loader"></div>
    </div> 
    <?php include $prefix . "include/navbar.php";?>
    <section class="cover py-main" style='background: url(<?php echo $prefix;?>assets/img/uniongroup/slider/img_union_cover.jpg); background-size: cover; background-repeat: no-repeat;'> 
    </section>
    
    <section class="header-slider">
        <div class="background">
            
        </div>
        <div class="col-md-12 slider">
            <div class="wrapper py-main">
                <div class="form-cell text-center">
                    <h2 class="title">I'd Like to Book</h2>
                </div>
                <form class="needs-validation">
                <div class="form-group  mb-5">
                    <select class="js-example-basic-multiple custom-select" name="state">
                        <option value="AL">Alabama</option>
                            
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group mb-5">
                    <div class="form-group">
                        <select class="custom-select" id="validationCustom04" required>
                            <option value="">Lunch</option>
                            <option value="1">Dinner</option>
                        </select>
                        <div class="invalid-feedback">
                            Please choose a valid province
                        </div>
                    </div>
                </div>
                <div class="form-group mb-5">
                    <input type="number" class="form-control border-btm" id="exampleInputPassword1" placeholder="number of guests">
                </div>
                <div class="form-group mb-5">
                    <input type="text" class="form-control form-control-datepicker  border-btm" placeholder="(MM/DD/YYYY)" id="dateOfBirth" required="">  
                    <div class="invalid-feedback">
                    Please input date
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sign">next</button>
                </div>
                </form>
            </div>
        </div>
    </section>


    <div class="resto">
        <section class="section-header" data-toggle="sticky-onscroll">
            <nav class="navbar header-uniongroup navbar-expand-md" style='background: url(<?php echo $prefix;?>assets/img/uniongroup/bg/bg_union.jpg) center no-repeat; background-size: cover;'>
                <div class='container'>
                <img src="<?php echo $prefix;?>assets/img/uniongroup/logo/logo_oniongreen.png" alt="" class='icon-header h-size'>
                <div class="navbar-toggler dropdown-toggle dropdown-view-mobile" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class='toggle-point'> more </span>
                    <li class="nav-item dropdown position-relative list-unstyled">
                        <div class="dropdown-menu dropdown-menu-mobile" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">our story</a>
                            <a class="dropdown-item" href="#">our story</a>
                            <a class="dropdown-item" href="#">menu</a>
                        </div>
                    </li>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-header mr-auto">
                        <li class="nav-item">
                        <a class="nav-link header-link" href="#">our story</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link header-link" href="#">what's on</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link header-link" href="#">menu</a>
                        </li>
                    </ul>
                </div>
                <span class="book-now" id='book-now'>
                    <a class="book-link header-link">book now</a>
                </span>
            </nav>
        </section>
        <div class="content">
            <section class="section-location py-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center mb-5">
                        <p class='title animated vp-fadeinup delayp1'>Modern gastropub serving housemade sausages, draft beers, and the capital's best live performances.</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="list-location">
                                <ul class='list-unstyled list-city'>
                                    <li class='city active' id='plazasenayan'>plaza senayan</li>
                                    <li class='city' id='pik'>pik</li>
                                    <li class='city' id='pondokindah'>pondok indah</li>
                                    <li class='city' id='senayan'>senayan city</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 position-relative">
                            <!-- <img src="<?php echo $prefix;?>assets/img/uniongroup/ic_back.png" alt="" class='icon-prev'> 
                            <img src="<?php echo $prefix;?>assets/img/uniongroup/ic_next.png" alt="" class='icon-next'> -->
                            <div id="tab">                           
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-img-full py-main position-relative">
                <div class="row row-0">
                    <div class="col-md-12 mb-3">
                        <div class="owl-carousel owl-theme owl-img-full">
                            <div class="animated vp-fadeinright delayp3">
                                <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/img_union01.jpg" alt="">
                            </div>
                            <div class="animated vp-fadeinright delayp3">
                                <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/img_union02.jpg" alt="">
                            </div>
                            <div class="animated vp-fadeinright delayp3">
                                <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/img_union03.jpg" alt="">
                            </div>
                            <div class="animated vp-fadeinright delayp3">
                                <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/img_union04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto text-center">
                            <div class="wrapper">
                                <p class='img-full-desc'>After a day at work, nothing beats an ice-cold pint and crips-skinned, juicy sausages. <br />
                                The Dutch is bringing you all of that, and more. The modern gastropub concept forn the Union Group ups the game with a modern interior, a menu of elevated comfort food with a creative edge, a wide selection of beers on tap and handcrafted cocktails.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-place-pict py-main">
                <div class="container mt-5">
                    <div class="wrapper">
                        <div class="heading w-link mb-4 animated vp-fadeinup delayp1">
                            <div>
                                <h2 class='title'>what's on the dutch</h2>
                            </div>
                            <a href="<?php echo $prefix; ?>corporate/news" class="btn btn-link no-border">view all events</a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel owl-theme owl-place-pict">
                                    <div class="animated vp-fadeinright delayp3">
                                        <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/event.jpg" alt="">
                                    </div>
                                    <div class="animated vp-fadeinright delayp3">
                                        <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/event.jpg" alt="">
                                    </div>
                                    <div class="animated vp-fadeinright delayp3">
                                        <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/event.jpg" alt="">
                                    </div>
                                    <div class="animated vp-fadeinright delayp3">
                                        <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/event.jpg" alt="">
                                    </div>
                                    <div class="animated vp-fadeinright delayp3">
                                        <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/event.jpg" alt="">
                                    </div>
                                    <div class="animated vp-fadeinright delayp3">
                                        <img src="<?php echo $prefix;?>assets/img/uniongroup/slider/event.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container insta-carousel mt-5">
                    <div class="wrapper">
                        <div class="heading w-link mb-4 animated vp-fadeinup delayp1">
                            <div>
                                <h2 class='title-instagram'>@thedutchjakarta</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="instafeed-gallery-feed" class="owl-carousel owl-theme gallery carousel-instagram">
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include $prefix . "include/footer.php";?>
        </div>
    </div>

    <button class="book-now-mobile"  id='book-now-mobile'>
    <span> book now</span>
  </button>
  <?php include $prefix . "include/script.php";?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
  <script src=" https://matthewelsom.com/assets/js/libs/instafeed.min.js"></script>
  <script>
    let galleryFeed = new Instafeed({
    get: "user",
    userId: 17330129,
    accessToken: "17330129.408f535.8f9edff07c82475d81702b4e48e532dd",
    resolution: "standard_resolution",
    useHttp: "true",
    limit: 10,
    template: 
                '<div class="img-featured-container">'+
                    '<div class="img-backdrop"></div>'+
                        '<div class="description-container">'+
                        '<span class="caption"> {{caption}}</span>'+
                        '</div>'+
                    '<div class="img-instagram" style="background: url({{image}}) no-repeat center; background-size: cover; height: 350px;"></div>'+
                '</div>',
    target: "instafeed-gallery-feed",
    after: function() {
        // disable button if no more results to load
        if (!this.hasNext()) {
        btnInstafeedLoad.setAttribute('disabled', 'disabled');
        }
        
        let owl = $(".owl-carousel"),
            owlSlideSpeed = 300;

        // init owl    
        owl.owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText: ["<span class='icon icon-arrow-carousel-left'> <img src='<?php echo $prefix; ?>assets/img/uniongroup/ic_back.png' alt='left-arrow' /> </span>","<span class='icon icon-arrow-carousel-right'> <img src='<?php echo $prefix; ?>assets/img/uniongroup/ic_next.png' alt='right-arrow' /> </span>"],
            responsive:{
                0:{
                    items:1
                },
                600: {
                items: 2,
                dots: false
            },
                1000:{
                    items:4,
                    dots: false
                }
            }
        });

        // keyboard controls
        $(document.documentElement).keydown(function(event) {
        if (event.keyCode == 37) {
            owl.trigger('prev.owl.carousel', [owlSlideSpeed]);
        }
        else if (event.keyCode == 39) {
            owl.trigger('next.owl.carousel', [owlSlideSpeed]);
        }
        });
    }
    });

    galleryFeed.run();

    $(document).ready(function() {
        $("#tab").load('<?php echo $prefix;?>union/plazasenayan/index.php');
        $("#plazasenayan").click(function(){
            $("#tab").load('<?php echo $prefix;?>union/plazasenayan/index.php');
        });
        $("#pik").click(function(){
            $("#tab").load('<?php echo $prefix;?>union/pik/index.php');
        });
        $("#pondokindah").click(function(){
            $("#tab").load('<?php echo $prefix;?>union/pondokindah/index.php');
        });
        $("#senayan").click(function(){
            $("#tab").load('<?php echo $prefix;?>union/senayan/index.php');
        });
    });   

   $(".js-example-basic-multiple").select2({maximumSelectionSize: 3});
  </script>
</body>
</html>