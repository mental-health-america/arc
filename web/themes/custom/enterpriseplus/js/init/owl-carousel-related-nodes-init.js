(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtowlCarouselRelatedNodes = {
    attach: function (context, settings) {
      $(context).find('.mt-carousel-related-nodes').once('mtowlCarouselRelatedNodesInit').each(function() {
        $(this).owlCarousel({
          items: 4,
          itemsDesktopSmall: [992,2],
          itemsTablet: [768,2],
          autoPlay: drupalSettings.enterpriseplus.owlCarouselRelatedNodesInit.owlRelatedNodesEffectTime,
          navigation: true,
          pagination: false,
          navigationText: false
        });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);
