/* ==========================================================================
   General
   ========================================================================== */

/* Viewport Animations
-------------------------------------------------- */
$(document).ready(function() {
  // Attention Seekers
  $('.vp-pulse').viewportChecker({classToAdd: 'visible animated pulse', offset: 100});
  $('.vp-swing').viewportChecker({classToAdd: 'visible animated swing', offset: 100});

  // Fade In
  $('.vp-fadein').viewportChecker({classToAdd: 'visible animated fadeIn', offset: 100});
  $('.vp-fadeinup').viewportChecker({classToAdd: 'visible animated fadeInUp', offset: 100});
  $('.vp-fadeinright').viewportChecker({classToAdd: 'visible animated fadeInRight', offset: 100});
  $('.vp-fadeindown').viewportChecker({classToAdd: 'visible animated fadeInDown', offset: 100});
  $('.vp-fadeinleft').viewportChecker({classToAdd: 'visible animated fadeInLeft', offset: 100});

  // Slide In
  $('.vp-slideinup').viewportChecker({classToAdd: 'visible animated slideInUp', offset: 100});
  $('.vp-slideinright').viewportChecker({classToAdd: 'visible animated slideInRight', offset: 100});
  $('.vp-slideindown').viewportChecker({classToAdd: 'visible animated slideInDown', offset: 100});
  $('.vp-slideinleft').viewportChecker({classToAdd: 'visible animated slideInLeft', offset: 100});

  // Rotate In
  $('.vp-rotatein').viewportChecker({classToAdd: 'visible animated rotateIn', offset: 100});
  $('.vp-rotateinupright').viewportChecker({classToAdd: 'visible animated rotateInUpRight', offset: 100});
  $('.vp-rotateinupleft').viewportChecker({classToAdd: 'visible animated rotateInUpLeft', offset: 100});
  $('.vp-rotateindownright').viewportChecker({classToAdd: 'visible animated rotateInDownRight', offset: 100});
  $('.vp-rotateindownleft').viewportChecker({classToAdd: 'visible animated rotateInDownLeft', offset: 100});

  // Zoom In
  $('.vp-zoomin').viewportChecker({classToAdd: 'visible animated zoomIn', offset: 100});
  $('.vp-zoominup').viewportChecker({classToAdd: 'visible animated zoomInUp', offset: 100});
  $('.vp-zoominright').viewportChecker({classToAdd: 'visible animated zoomInRight', offset: 100});
  $('.vp-zoomindown').viewportChecker({classToAdd: 'visible animated zoomInDown', offset: 100});
  $('.vp-zoominleft').viewportChecker({classToAdd: 'visible animated zoomInLeft', offset: 100});

  // Specials
  $('.vp-jackinthebox').viewportChecker({classToAdd: 'visible animated jackInTheBox', offset: 100});
  $('.vp-rollin').viewportChecker({classToAdd: 'visible animated rollIn', offset: 100});
  $('.vp-rollout').viewportChecker({classToAdd: 'visible animated rollOut', offset: 100});

  // Custome
  $('.vp-visited').viewportChecker({classToAdd: 'visited', offset: 100});

}); 


/* Smooth Scroll
-------------------------------------------------- */
$('a.smooth-scroll').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 800);
      return false;
    }
  }
});

/* Parallax
-------------------------------------------------- */
$(document).ready(function() {
  $('.parallax-window').parallax({parallax: 'scroll'});
}); 

/* Toggle active class
-------------------------------------------------- */
$('.classname').click(function(e){
  e.preventDefault();
  $(this).addClass('active');
  $(this).siblings().each(function(){
    $(this).removeClass('active') ;
  });
});


/* ==========================================================================
   Navbar
   ========================================================================== */

   /* Navbar Sticky
-------------------------------------------------- */

$(document).ready(function () {
  // Custom function which toggles between sticky class (is-sticky)
  var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
      var stickyHeight = sticky.outerHeight();
      var stickyTop = stickyWrapper.offset().top;
      if (scrollElement.scrollTop() >= stickyTop) {
          stickyWrapper.height(stickyHeight);
          sticky.addClass("is-sticky");
      }
      else {
          sticky.removeClass("is-sticky");
          stickyWrapper.height('auto');
      }
  };

  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function () {
      var sticky = $(this);
      var navbar = $(".navbar");
      var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
      sticky.before(stickyWrapper);
      sticky.addClass('sticky');

      // Scroll & resize events
      $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
          stickyToggle(sticky, stickyWrapper, $(this));
      });

      // On page load
      stickyToggle(sticky, stickyWrapper, $(window));
  });
});

/* Navbar Scroll
-------------------------------------------------- */
var logo = ["assets/img/uniongroup/logo/logo_rantai.png", "assets/img/uniongroup/logo/logo_uniongroup-dark.png"];

$(function(event) {
  activePage();
})

function activePage() {
  var active = $('meta[name=page]').attr('initial');
  if (active) {
      $(document).find('*[pageactive=' + active + ']').addClass('active');
      $(document).find('.nav-' + active).addClass('active');
  }
}

$("#slide").click(function(){
  $(".nav-slide").toggleClass('active');
});

$("#close").click(function(){
  $(".nav-slide").toggleClass('active');
});

$(window).on("scroll", function() {
    if ($(window).scrollTop() > 100) {
      $(".navbar-union").addClass("navbar-scroll");
      $('.navbar-union .icon-union').attr('src', logo[0]);
      // $('.navbar-union .icon-union').css('width', '5%');
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".navbar-union").removeClass("navbar-scroll");
      $('.navbar-union .icon-union').attr('src', logo[1]);
      $('.navbar-union .icon-union').addClass('first');
      // $('.navbar-union .icon-union').css('width', '8%');
    }
  });

// Animation on load
document.addEventListener("DOMContentLoaded", function(event) {
  $(".loader").fadeOut('slow');
  $(".loader-wrapper").fadeOut("slow");
//  $(".anim-1").addClass("animated fadeInLeft delayp10");
// $(".anim-2").addClass("animated fadeInUp delayp12");
  //$(".anim-3").addClass("animated fadeInUp delayp14");  
});

// Header Slider
$("#book-now").on('click', function(){
  let desc = '<i class="fas fa-times"></i>';
  let btn = $(".book-link")[0];
  let slider = $(".slider");
  let background = $(".background");
  slider.toggleClass('slider-active');
  background.toggleClass('background-active');
  
  if(btn.innerHTML === 'book now') {
      btn.innerHTML = desc;
  }
  else {
      btn.innerHTML = 'book now';
  }
});


$("#book-now-mobile").on('click', function(){
  let desc = '<i class="fas fa-times"></i>';
  let btn = $(".book-link")[0];
  let slider = $(".slider");
  let background = $(".background");
  slider.toggleClass('slider-active');
  background.toggleClass('background-active');
  
  if(btn.innerHTML === 'book now') {
      btn.innerHTML = desc;
  }
  else {
      btn.innerHTML = 'book now';
  }
});


$("#close-book-now-mobile").on('click', function(){
  let desc = '<i class="fas fa-times"></i>';
  let btn = $(".book-link")[0];
  let slider = $(".slider");
  let background = $(".background");
  slider.toggleClass('slider-active');
  background.toggleClass('background-active');
});


$(".background").on('click', function(){
  let desc = '<i class="fas fa-times"></i>';
  let btn = $(".book-link")[0];
  let slider = $(".slider");
  let background = $(".background");
  slider.toggleClass('slider-active');
  background.toggleClass('background-active');
  
  if(btn.innerHTML === 'book now') {
      btn.innerHTML = desc;
  }
  else {
      btn.innerHTML = 'book now';
  }
});

/* Get Instagram 
-------------------------------------------------- */
// var galleryFeed = new Instafeed({
//   get: "user",
//   userId: 10134760279,
//   accessToken: "10134760279.b9e0312.e22bccd498734704b38f21741e508106",
//   resolution: "standard_resolution",
//   useHttp: "true",
//   limit: 10,
//   template: 
//               '<div class="img-featured-container">'+
//                   '<div class="img-backdrop"></div>'+
//                   '<div class="description-container">'+
//                     '<span class="caption"> {{caption}}</span>'+
//                   '</div>'+
//                   '<img src="{{image}}" class="img-responsive img-instagram">'+
//               '</div>',
//   target: "instafeed-gallery-feed",
//   after: function() {
//       // disable button if no more results to load
//       if (!this.hasNext()) {
//       btnInstafeedLoad.setAttribute('disabled', 'disabled');
//       }
      
//       var owl = $(".owl-carousel"),
//           owlSlideSpeed = 300;

//       // init owl    
//       owl.owlCarousel({
//           loop:true,
//           margin:10,
//           nav:true,
//           navText: ["<span class='icon icon-arrow-carousel-left'> <img src='<?php echo $prefix; ?>assets/img/uniongroup/ic_back.png' alt='left-arrow' /> </span>","<span class='icon icon-arrow-carousel-right'> <img src='<?php echo $prefix; ?>assets/img/uniongroup/ic_next.png' alt='right-arrow' /> </span>"],
//           responsive:{
//               0:{
//                   items:1
//               },
//               600: {
//               items: 2,
//               dots: false
//           },
//               1000:{
//                   items:4,
//                   dots: false
//               }
//           }
//       });

//       // keyboard controls
//       $(document.documentElement).keydown(function(event) {
//       if (event.keyCode == 37) {
//           owl.trigger('prev.owl.carousel', [owlSlideSpeed]);
//       }
//       else if (event.keyCode == 39) {
//           owl.trigger('next.owl.carousel', [owlSlideSpeed]);
//       }
//       });
//   }
//   });

// galleryFeed.run();


/* Map
-------------------------------------------------- */
// function initMap() {
//   var us = {lat: -6.247656, lng: 106.626627};
//   var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 15,
//     center: {lat: -6.247656, lng: 106.626627},
//     styles: [
//     {
//         "featureType": "water",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#e9e9e9"
//             },
//             {
//                 "lightness": 17
//             }
//         ]
//     },
//     {
//         "featureType": "landscape",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#f5f5f5"
//             },
//             {
//                 "lightness": 20
//             }
//         ]
//     },
//     {
//         "featureType": "road.highway",
//         "elementType": "geometry.fill",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 17
//             }
//         ]
//     },
//     {
//         "featureType": "road.highway",
//         "elementType": "geometry.stroke",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 29
//             },
//             {
//                 "weight": 0.2
//             }
//         ]
//     },
//     {
//         "featureType": "road.arterial",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 18
//             }
//         ]
//     },
//     {
//         "featureType": "road.local",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 16
//             }
//         ]
//     },
//     {
//         "featureType": "poi",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#f5f5f5"
//             },
//             {
//                 "lightness": 21
//             }
//         ]
//     },
//     {
//         "featureType": "poi.park",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#dedede"
//             },
//             {
//                 "lightness": 21
//             }
//         ]
//     },
//     {
//         "elementType": "labels.text.stroke",
//         "stylers": [
//             {
//                 "visibility": "on"
//             },
//             {
//                 "color": "#ffffff"
//             },
//             {
//                 "lightness": 16
//             }
//         ]
//     },
//     {
//         "elementType": "labels.text.fill",
//         "stylers": [
//             {
//                 "saturation": 36
//             },
//             {
//                 "color": "#333333"
//             },
//             {
//                 "lightness": 40
//             }
//         ]
//     },
//     {
//         "elementType": "labels.icon",
//         "stylers": [
//             {
//                 "visibility": "off"
//             }
//         ]
//     },
//     {
//         "featureType": "transit",
//         "elementType": "geometry",
//         "stylers": [
//             {
//                 "color": "#f2f2f2"
//             },
//             {
//                 "lightness": 19
//             }
//         ]
//     },
//     {
//         "featureType": "administrative",
//         "elementType": "geometry.fill",
//         "stylers": [
//             {
//                 "color": "#fefefe"
//             },
//             {
//                 "lightness": 20
//             }
//         ]
//     },
//     {
//         "featureType": "administrative",
//         "elementType": "geometry.stroke",
//         "stylers": [
//             {
//                 "color": "#fefefe"
//             },
//             {
//                 "lightness": 17
//             },
//             {
//                 "weight": 1.2
//             }
//         ]
//     }
// ]
//   });
 
//     var icon = {
//         url: "../assets/img/icon/map-marker.svg",
//         scaledSize: new google.maps.Size(40,53)
//     };
 
//     var marker = new google.maps.Marker({
//       position: us,
//       map: map,
//         icon: icon
//     });
 
//     var centered;
 
//     function calculateCenter() {
//         centered =  map.getCenter();
//     }
 
//     if(parseInt(window.innerWidth) <= 769) {
//         map.setCenter(us);
//     }
 
//     var contentString =
//     '<div class="content">'+
//       '<h2>Seniman Ruang</h2>'+
//       '<div class="marker-content">'+
//       '<p class="text-muted">Weave Coworking, Gedung One PM Lantai 3'+
//       'Jl. Boulevard Gading Serpong M5/17Tangerang, Banten, 15810</p>'+
//       '</div>'+
//     '</div>';
 
//     var infowindow = new google.maps.InfoWindow({
//       content: contentString
//     });
 
//     marker.addListener('click', function() {
//       infowindow.open(map, marker);
//     })
// }


