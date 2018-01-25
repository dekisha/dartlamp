(function ($) {
  'use strict';

  Drupal.behaviors.gallery = {
    attach: function (context) {

      // init Isotope
      var $grid = $('.view-galery .view-content__inner').isotope({
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
    attach: function (context, settings) {
      $('.field--name-field-homepage-slider-images', context).once().each(function () {
        $(this).slick({
          infinite: true,
          autoplay: false,
          autoplaySpeed: 8000,
          fade: true,
          dots: false,
          // prevArrow: '<button class="slick-prev fi fi-line-angle-left"></button>',
          // nextArrow: '<button class="slick-next fi fi-line-angle-right"></button>'
        });
      });
    }
  };

  // Drupal.behaviors.parallax = {
  //   attach: function (context) {
  //     $('.field--name-field-paragraph-layouts', context).once('zzzzzzz').each(function(){
  //       $(this).find('.field__item').addClass('section');
  //       console.log($(this))
  //       $(this).fullpage();
  //     });
  //   }
  // };

  Drupal.behaviors.headroomFn = {
    attach: function (context) {
      $('.page-node-type-page.not-logged-in', context).once().each(function () {
        $(this).find('.l-master-header').headroom({
          'offset': 20,
          'tolerance': 2
        });
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
      $('.node--type-lamp').once().each(function () {
        var $slickSlider = $(this).find('.js-slick-slider');
        var $slickNav = $(this).find('.js-slick-nav');
        $slickSlider.find('.field__item').each(function () {
          $(this).prepend('<div class="slick-count"/>');
        });
        $slickSlider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
          var i = (currentSlide ? currentSlide : 0) + 1;
          $('.slick-count').text(i + ' of ' + slick.slideCount);
        });
        $slickSlider.slick({
          arrows: false,
          asNavFor: '.js-slick-nav',
          adaptiveHeight: true,
          centerMode: true,
          fade: false,
          focusOnSelect: true,
          slide: '.field__item',
          slidesToScroll: 1,
          variableWidth: true
        });
        $slickNav.slick({
          asNavFor: '.js-slick-slider',
          focusOnSelect: true,
          slide: '.field__item',
          slidesToShow: 3,
          vertical: true,
        });
      });
    }
  };

  // Drupal.behaviors.customScrollbar = {
  //   attach: function (context) {
  //     $('.node--type-lamp.node--view-mode-full .field--name-body').once().mCustomScrollbar({
  //       theme: "dark"
  //     });
  //   }
  // };

  // Drupal.behaviors.threesixty = {
  //   attach: function (context) {
  //     $('.product1').once().ThreeSixty({
  //       totalFrames: 52, // Total no. of image you have for 360 slider
  //       endFrame: 52, // end frame for the auto spin animation
  //       currentFrame: 1, // This the start frame for auto spin
  //       imgList: '.threesixty_images', // selector for image list
  //       progress: '.spinner', // selector to show the loading progress
  //       imagePath: '/themes/custom/dartlamp/images/assets/', // path of the image assets
  //       filePrefix: '', // file prefix if any
  //       ext: '.png', // extention for the assets
  //       height: 265,
  //       width: 400,
  //       navigation: true,
  //       disableSpin: true // Default false
  //     });
  //   }
  // };

  // Drupal.behaviors.reel = {
  //   attach: function (context) {
  //     $('.reel_images').once().each(function(){
  //         $(this).append('<img class="reel result" data-images="#.png" data-path="themes/custom/dartlamp/images/assets/" data-frames="52" width="200" height="auto" src="themes/custom/dartlamp/images/assets/1.png" />');
  //     });
  //   }
  // };

  Drupal.behaviors.fullImageViewLink = {
    attach: function (context) {
      var link, linkHref;
      $('.field--name-field-images .field__item').once().each(function () {
        link = $(this).find('a');
        linkHref = link.prop('href');
        link.find('img').unwrap('a');
        $(this).append('<a href="' + linkHref + '" class="slick-expander"></a>');
      });
    }
  };

  Drupal.behaviors.faddingEffect = {
    attach: function (context) {
      $('.region-featured', context).once().each(function () {
        var $this = $(this);
        var $overlay = $('<div class="region-featured__overlay"></div>').prependTo($this);
        $(window).on('scroll', function () {
          $overlay.css('opacity', $(window).scrollTop() / $this.outerHeight());
        });
        $this.append('<a class="scroll-to" href="#main">Scroll to</a>');
      });
    }
  };

  Drupal.behaviors.smoothScroll = {
    attach: function (context) {
      // On click, smooth scroll this baby!
      $('a.scroll-to').on('click', function () {
        $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top
        }, 500);
        return false;
      });
    }
  };

  Drupal.behaviors.mobileMenu = {
    attach: function (context) {
      function toggleClassMenu() {
        myMenu.classList.add("c-smooth__menu--animatable");
        if (!myMenu.classList.contains("c-smooth__menu--visible")) {
          myMenu.classList.add("c-smooth__menu--visible");
        } else {
          myMenu.classList.remove('c-smooth__menu--visible');
        }
      }

      function OnTransitionEnd() {
        myMenu.classList.remove("c-smooth__menu--animatable");
      }
      var myMenu = document.querySelector(".c-smooth__menu");
      var oppMenu = document.querySelector(".c-smooth__layout__header__menu-icon");
      var appMenu = document.querySelector(".c-smooth__menu__app-menu");
      myMenu.addEventListener("transitionend", OnTransitionEnd, false);
      oppMenu.addEventListener("click", toggleClassMenu, false);
      appMenu.addEventListener('click', function (e) {
        e.stopPropagation();
      });
      myMenu.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleClassMenu();
      });
    }
  };


})(jQuery);