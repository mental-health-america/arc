(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtowlCarouselProducts = {
    attach: function (context, settings) {
      $(context).find('.mt-carousel-products').once('mtowlCarouselProductsInit').each(function() {
        $(this).owlCarousel({
          items: 4,
          itemsDesktopSmall: [992,2],
          itemsTablet: [768,2],
          autoPlay: drupalSettings.enterpriseplus.owlCarouselProductsInit.owlProductsEffectTime,
          navigation: true,
          pagination: false,
          navigationText: false
        });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);
