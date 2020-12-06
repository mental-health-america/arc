(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtOwlCarouselBrands = {
    attach: function (context, settings) {
      $(context).find('.mt-carousel-brands').once('mtowlCarouselBrandsInit').each(function() {
        $(this).owlCarousel({
          itemsCustom: [[0, 2], [480, 3], [768, 4], [992, 5], [1200, 5]],
          autoPlay: drupalSettings.enterpriseplus.owlCarouselBrandsInit.owlBrandsEffectTime,
          navigation: true,
          pagination: false,
          navigationText: false
        });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);
