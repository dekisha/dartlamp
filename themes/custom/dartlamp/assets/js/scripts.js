(function ($) {
  'use strict';

  Drupal.behaviors.galleryMasonry = {
    attach: function (context) {
      
      $('.view-galery .view-content').once().masonry({
        // options
        itemSelector: '.views-row',
        columnWidth: 200
      });
    }
  };

})(jQuery);
