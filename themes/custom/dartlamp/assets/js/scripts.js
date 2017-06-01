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
      $('.sort-by-button-group').on('click', 'button', function () {
        var sortValue = $(this)["0"].attributes["0"].nodeValue;
        $grid.isotope({
          sortBy: sortValue
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
        autoplay: true,
        autoplaySpeed: 8000,
        fade: true,
        dots: true
      });
    }
  };
  
  Drupal.behaviors.nodeSlider = {
    attach: function (context) {
      $('.node--type-lamp .field--name-field-images').once().clone().insertAfter($('.node--type-lamp .field--name-field-images')).addClass('slider-nav');

      $('.node--type-lamp .field--name-field-images:first-child').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.node--type-lamp .field--name-field-images:first-child',
        dots: true,
        centerMode: true,
        focusOnSelect: true
      });
    }
  };

})(jQuery);