(function ($) {
  'use strict';

  Drupal.behaviors.gallery = {
    attach: function (context) {

      $('.views-field-field-hero-video iframe').attr('data-video-embed-field-modal', function (i, oldSrc) {
        var isAutoPlay = oldSrc.match(/autoplay=([^&]*)/);
        if (isAutoPlay && isAutoPlay[1] == 0) {
          return oldSrc.replace('autoplay=0', 'autoplay=1');
        }
      });

      // init Isotope
      var $grid = $('.view-galery .view-content__inner');

      $grid.imagesLoaded(function () {
        $grid.isotope({
          itemSelector: '.views-row',
          layoutMode: 'masonry',
          getSortData: {
            name: '.views-field-nothing a',
            date: '.views-field-field-made-in .field-content'
          }
        });
      });

      // bind sort button click
      $('.sorting-button-group').on('click', 'button', function () {
        var sortByValue = $(this).attr('data-sort-by');
        // console.log(sortByValue);
        $grid.isotope({
          sortBy: sortByValue,
          sortAscending: {
            name: true,
            date: false
          }
        });
      });

      // bind filter button click
      $('.filters-button-group').on('click', 'button', function () {
        // console.log('click!');
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
      $('.field--name-field-homepage-slider-images', context).once('hpSlider').each(function () {
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

  Drupal.behaviors.contactPageParallax = {
    attach: function (context) {
      $('.path-contact #main', context).once('contactPageParallax').each(function () {
        $(this).parallax({
          imageSrc: '../../themes/custom/dartlamp/images/contact-page.jpg',
          positionY: '200px',
          positionX: 'right'
        });
      });
    }
  };

  Drupal.behaviors.bioPageParallax = {
    attach: function (context) {
      // check if biography page
      if ($('.node--type-page.node--view-mode-full').data('history-node-id') === 4) {
        $('.field--name-field-paragraph-layouts > .field__item', context).once('bioPageParallax').each(function () {
          if ($(this).hasClass('field__item--1')) {
            $(this).find('.group-left').paroller({
              factor: 0.4, // multiplier for scrolling speed and offset
              type: 'foreground', // background, foreground
              direction: 'vertical' // vertical, horizontal
            });
          }
          if ($(this).hasClass('field__item--2')) {
            $(this).find('.group-left').paroller({
              factor: -0.4, // multiplier for scrolling speed and offset
              type: 'foreground', // background, foreground
              direction: 'vertical' // vertical, horizontal
            });
          }
          if ($(this).hasClass('field__item--3')) {
            $(this).find('.group-right').paroller({
              factor: 0.2, // multiplier for scrolling speed and offset
              type: 'foreground', // background, foreground
              direction: 'vertical' // vertical, horizontal
            });
          }
        });
      }
    }
  };

  Drupal.behaviors.headroomFn = {
    attach: function (context) {
      $('.page-node-type-page.not-logged-in', context).once('headroomFn').each(function () {
        $(this).find('.l-master-header').headroom({
          'offset': 20,
          'tolerance': 2
        });
      });
    }
  };

  Drupal.behaviors.getItSticky = {
    attach: function (context) {
      $('.view-galery', context).once('getItSticky').each(function () {
        $(this).find('.view-header').sticky({
          widthFromWrapper: false,
          topSpacing: 20
        });
      });
    }
  };

  Drupal.behaviors.nodeSlider = {
    attach: function (context) {
      $('.node--type-lamp').once('nodeSlider').each(function () {
        var $slickSlider = $(this).find('.js-slick-slider');
        var $slickNav = $(this).find('.js-slick-nav');
        $slickSlider.find('.field__item').each(function () {
          $(this).prepend('<div class="slick-count"/>');
        });
        $slickSlider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
          var i = (
            currentSlide ?
            currentSlide :
            0) + 1;
          $('.slick-count').text(i + ' of ' + slick.slideCount);
          $(this).find('.slick-active').siblings('.slick-slide-prev').addBack().removeClass('slick-slide-prev');
          $(this).find('.slick-active').prev().addClass('slick-slide-prev');
          $(this).find('.slick-active').siblings('.slick-slide-next').addBack().removeClass('slick-slide-next');
          $(this).find('.slick-active').next().addClass('slick-slide-next');
        });
        $slickSlider.imagesLoaded(function () {
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
        });
        $slickNav.imagesLoaded(function () {
          $slickNav.slick({
            asNavFor: '.js-slick-slider',
            focusOnSelect: true,
            slide: '.field__item',
            slidesToShow: 4,
            vertical: true
          });
        });
      });
    }
  };

  // Drupal.behaviors.customScrollbar = {
  //   attach: function (context) {
  //     $('.node--type-lamp.node--view-mode-full .field--name-body').once().mCustomScrollbar({
  //       setHeight: '500px',
  //       theme: 'dark'
  //     });
  //   }
  // };

  // Drupal.behaviors.threesixty = {
  //   attach: function (context) {
  //     $('.product1').once().ThreeSixty({
  //       totalFrames: 52,  Total no. of image you have for 360 slider
  //       endFrame: 52,  end frame for the auto spin animation
  //       currentFrame: 1,  This the start frame for auto spin
  //       imgList: '.threesixty_images',  selector for image list
  //       progress: '.spinner',  selector to show the loading progress
  //       imagePath: '/themes/custom/dartlamp/images/assets/',  path of the image assets
  //       filePrefix: '',  file prefix if any
  //       ext: '.png',  extention for the assets
  //       height: 265,
  //       width: 400,
  //       navigation: true,
  //       disableSpin: true  Default false
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

  // Drupal.behaviors.fullImageViewLink = {
  //   attach: function (context) {
  //     var link, linkHref;
  //     $('.field--name-field-images .field__item').once().each(function () {
  //       link = $(this).find('a');
  //       linkHref = link.prop('href');
  //       link.find('img').unwrap('a');
  //       $(this).append('<a href="' + linkHref + '" class="slick-expander"></a>');
  //     });
  //   }
  // };

  Drupal.behaviors.faddingEffect = {
    attach: function (context) {
      $('.region-featured', context).once('faddingEffect').each(function () {
        var $this = $(this);
        var $overlay = $('<div class="region-featured__overlay"></div>').prependTo($this);
        $(window).on('scroll', function () {
          $overlay.css('opacity', $(window).scrollTop() / $this.outerHeight());
        });
        $this.append('<a class="scroll-to" href="#main">Scroll to</a>');
      });
    }
  };

  // Landing page power on button functionality
  Drupal.behaviors.landingPageHide = {
    attach: function (context) {
      $('#splashify', context).once('landingPageHide').each(function () {
        var $this = $(this);
        // trigger on power off button click
        $this.find('.icon-power-off').on('click', function () {
          // remove splashify
          $this.fadeOut(3000);
          setTimeout(function () {
            // get slick object
            var slickSlider = $('.field--name-field-homepage-slider-images');
            // go to 1st slide (if autoplay is running)
            slickSlider.slick('slickGoTo', 0);
            // get that 1st slide (active one)
            var slickCurrent = slickSlider.find('.slick-current');
            // This way we start css animation
            $('body').removeClass('splash-active').addClass('splash-hidden');
          }, 3000);
        });
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
        }
        else {
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

  // Disabling hover when scrolling
  Drupal.behaviors.disableScroll = {
    attach: function (context) {
      // define body var
      var body = document.body, timer;
      // listens for scroll event
      window.addEventListener('scroll', function () {
        // clear timer
        clearTimeout(timer);
        // check if body contains u-disable-hover class
        if (!body.classList.contains('u-disable-hover')) {
          // set it
          body.classList.add('u-disable-hover');
        }
        // set timer function
        timer = setTimeout(function () {
          // remove u-disable-hover class after 1/2 of second
          body.classList.remove('u-disable-hover');
        }, 500);
      }, false);
    }
  };

})(jQuery);
