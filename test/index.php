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
<style>
        @import url("https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i");
        body {
        font-family: 'Lato', "Helvetica", Arial, sans-serif;
        }

    
        .img-featured-container {
        overflow: hidden;
        position: relative;
        }

        .img-featured-container img {
        width: 100%;
        }

        .img-featured-container .img-backdrop {
        background: linear-gradient(135deg, rgba(38, 163, 255, 0.85), rgba(83, 201, 179, 0.85));
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 1;
        opacity: 0;
        transition: all 0.3s ease;
        }

        .img-featured-container:hover > .img-backdrop {
        opacity: 1;
        }

        .img-featured-container .description-container {
        color: #fff;
        font-size: 16px;
        line-height: 1.2;
        padding: 0 30px;
        text-align: center;
        line-height: 20px;
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
        -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
        z-index: 2;
        opacity: 0;
        transition: all .2s ease;
        }

        .img-featured-container:hover .description-container {
        opacity: 1;
        }

        .img-featured-container .description-container .caption {
        margin: 0 5px;
        }

/* @import url("https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i");
body {
  font-family: 'Lato', "Helvetica", Arial, sans-serif;
}

.row.no-gutter {
  margin-left: 0;
  margin-right: 0;
}

.row.no-gutter [class*='col-']:not(:first-child),
.row.no-gutter [class*='col-']:not(:last-child) {
  padding-right: 0;
  padding-left: 0;
}

body {
  padding: 10px;
}

.img-featured-container {
  overflow: hidden;
  position: relative;
}

.img-featured-container img {
  width: 100%;
}

.img-featured-container .img-backdrop {
  background: linear-gradient(135deg, rgba(38, 163, 255, 0.85), rgba(83, 201, 179, 0.85));
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s ease;
}

.img-featured-container:hover > .img-backdrop {
  opacity: 1;
}

.img-featured-container .description-container {
  color: #fff;
  font-size: 16px;
  line-height: 1.2;
  padding: 0 30px;
  text-align: center;
  line-height: 20px;
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  z-index: 2;
  opacity: 0;
  transition: all .2s ease;
}

.img-featured-container .description-container .fa-instagram {
  font-size: 40px;
}

.img-featured-container .description-container p {
  font-weight: 300;
  margin-bottom: 0;
}

.img-featured-container:hover .description-container {
  opacity: 1;
}

.img-featured-container .description-container .caption {
  display: none;
  margin-bottom: 10px;
}

.img-featured-container .description-container .likes,
.img-featured-container .description-container .comments {
  margin: 0 5px;
}

#btn-instafeed-load {
  color: #fff;
  background: #26a3ff;
  margin: 20px auto;
  padding: 8px 12px;
  display: block;
  border: none;
}

@media screen and (min-width: 768px) {
  .img-featured-container .description-container .caption {
    display: block;
  }
} */

        
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="instafeed-gallery-feed" class="owl-carousel owl-theme gallery row no-gutter">
                        <!--  instagram feed will load here -->        
            </div>
        </div>
    </div>
</div>

        
    
  <?php include $prefix . "include/script.php";?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
    <script src=" https://matthewelsom.com/assets/js/libs/instafeed.min.js"></script>
    <script>

            var galleryFeed = new Instafeed({
                get: "user",
                userId: 4622774,
                accessToken: "4622774.7cbaeb5.ec8c5041b92b44ada03e4a4a9153bc54",
                resolution: "standard_resolution",
                useHttp: "true",
                limit: 10,
                template: 
                            '<div class="img-featured-container">'+
                                '<div class="img-backdrop"></div>'+
                                '<div class="description-container">'+
                                '<span class="caption"><i class="icon ion-chatbubble"></i> {{caption}}</span>'+
                                '</div>'+
                                '<img src="{{image}}" class="img-responsive">'+
                            '</div>',
                target: "instafeed-gallery-feed",
                after: function() {
                    // disable button if no more results to load
                    if (!this.hasNext()) {
                    btnInstafeedLoad.setAttribute('disabled', 'disabled');
                    }
                    
                    var owl = $(".owl-carousel"),
                        owlSlideSpeed = 300;

                    // init owl    
                    owl.owlCarousel({
                        loop:true,
                        margin:10,
                        nav:true,
                        responsive:{
                            0:{
                                items:1
                            },
                            200:{
                                items:2
                            },
                            400:{
                                items:3
                            },
                            1000:{
                                items:4
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

           
            </script>
</body>
</html>