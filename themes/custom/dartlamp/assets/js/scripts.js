(function ($) {
  'use strict';

  Drupal.behaviors.galleryMasonry = {
    attach: function (context) {

      $('.view-galery .view-content').isotope({
        itemSelector: '.views-row',
        masonry: {
          columnWidth: '.views-row'
        },
        getSortData: {
          name: '.views-field-title a'
        },
      });
    }
  };

})(jQuery);