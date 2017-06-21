(function ($) {
  'use strict';

  Drupal.behaviors.gallery = {
    attach: function (context) {

      // init Isotope
      var $grid = $('.view-galery .view-content').isotope({
        itemSelector: '.views-row',
        layoutMode: 'masonry',
        getSortData: {
          name: '.views-field-nothing a',
          number: '.views-field-nid span'
        }
      });

      // bind sort button click
      // $('.sort-by-button-group').on('click', 'button', function () {
      //   var sortValue = $(this)["0"].attributes["0"].nodeValue;
      //   $grid.isotope({
      //     sortBy: sortValue
      //   });
      // });

      // bind filter button click
      $('.filters-button-group').on('click', 'button', function () {
        console.log('click!');
        var filterValue = $(this).attr('data-filter');
        console.log(filterValue);
        $grid.isotope({
          filter: filterValue
        });
      });

      // change is-checked class on buttons
      $('.button-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $(this).addClass('is-checked');
        });
      });
    }
  };

  Drupal.behaviors.hpSlider = {
    attach: function (context) {
      $('.field--name-field-homepage-slider-images').once().slick({
        infinite: true,
        autoplay: false,
        autoplaySpeed: 8000,
        fade: true,
        dots: false,
        prevArrow: '<button class="slick-prev fi fi-line-angle-left"></button>',
        nextArrow: '<button class="slick-next fi fi-line-angle-right"></button>'
      });
    }
  };

  Drupal.behaviors.getItSticky = {
    attach: function (context) {
      $(".button-group").once().sticky({
        topSpacing: 0
      });
    }
  };

  Drupal.behaviors.nodeSlider = {
    attach: function (context) {
      $('.node--type-lamp').once('my-custom-behaviour').each(function () {
        // if there are more than 3 images init 2 sliders
        if ($('.slick-slider').find('.field__item').length > 3) {
          $('.slick-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            asNavFor: '.slick-nav',
            adaptiveHeight: true
          });
          $('.slick-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slick-slider',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            prevArrow: '<button class="slick-prev fi fi-line-angle-left"></button>',
            nextArrow: '<button class="slick-next fi fi-line-angle-right"></button>'
          });
        } 
        else { // and init only one slider if less than 3 
          $('.slick-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            autoplay: false,
            adaptiveHeight: true,
            prevArrow: '<button class="slick-prev fi fi-line-angle-left"></button>',
            nextArrow: '<button class="slick-next fi fi-line-angle-right"></button>'
          });
        }
      });
    }
  };

  Drupal.behaviors.customScrollbar = {
    attach: function (context) {
      $('.node--type-lamp.node--view-mode-full .field--name-body').once().mCustomScrollbar({
        theme: "dark"
      });
    }
  };

  Drupal.behaviors.threesixty = {
    attach: function (context) {
      $('.product1').once().ThreeSixty({
        totalFrames: 52, // Total no. of image you have for 360 slider
        endFrame: 52, // end frame for the auto spin animation
        currentFrame: 1, // This the start frame for auto spin
        imgList: '.threesixty_images', // selector for image list
        progress: '.spinner', // selector to show the loading progress
        imagePath: '/themes/custom/dartlamp/images/assets/', // path of the image assets
        filePrefix: '', // file prefix if any
        ext: '.png', // extention for the assets
        height: 265,
        width: 400,
        navigation: true,
        disableSpin: true // Default false
      });
    }
  };

  // Drupal.behaviors.landingPage = {
  //   attach: function (context) {
  //     $('.path-frontpage').once().each(function(){
  //       alert('test');
  //       $(this).append('<img src="/themes/custom/dartlamp/images/landing-page.jpg" />');
  //     });
  //   }
  // };

})(jQuery);