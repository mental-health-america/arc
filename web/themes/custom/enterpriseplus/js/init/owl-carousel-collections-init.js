(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtowlCarouselCollections = {
    attach: function (context, settings) {
      $(context).find('.mt-carousel-collections').once('mtowlCarouselCollectionsInit').each(function() {
        $(this).owlCarousel({
          items: 4,
          itemsDesktopSmall: [992,2],
          itemsTablet: [768,2],
          autoPlay: drupalSettings.enterpriseplus.owlCarouselCollectionsInit.owlCollectionsEffectTime,
          navigation: true,
          pagination: false,
          navigationText: false
        });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);
