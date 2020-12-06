(function (Drupal, $, window) {

  // To understand behaviors, see https://www.drupal.org/node/2269515
  Drupal.behaviors.bwl = {
    attach: function (context, settings) {

      // Execute code once the DOM is ready. $(document).ready() not required within Drupal.behaviors.
      //----------------------------------------------------------------------------------------------
      
      
      //Phone masking - formatting for the telephone field
      //==============================================================
      $(context).find('body').once('phoneMask').each(function(){
        if( $(".form-tel").length ){
          $(".form-tel").mask("(999) 999-9999");
          $(".form-tel").attr("placeholder", "(___) ___-____");
          $(".form-tel").on("blur", function() {
            var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );
            if( last.length == 5 ) {
              var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );
              var lastfour = last.substr(1,4);
              var first = $(this).val().substr( 0, 9 );
              $(this).val( first + move + '-' + lastfour );
            }
          });
        }
      });
      
      
      //User login, hiding labels and adding placeholder
      //==============================================================
      $(context).find('.sidebar-second .block-user-login-block label').once('hideloginlabels').each(function(){
        $(this).addClass('visually-hidden');
      });
      $(context).find('.sidebar-second .block-user-login-block').once('addloginplaceholder').each(function(){
        $(this).find('input[type="text"]').attr('placeholder', 'Username');
        $(this).find('input[type="password"]').attr('placeholder', 'Password');
      });
      
      
      //Adding class to Find an Affiliate exposed filters with reset buttons
      //==============================================================
      $(context).find('#views-exposed-form-find-an-affiliate-findanaffiliate').once('resetButton').each(function(){
        var thisForm = $(this);
        if($(thisForm).find('#edit-reset').length){
          $(thisForm).addClass('reset-button');
        }
      });
      
      
      //MHA Affiliates edit profile page
      //==============================================================
      
      //Adding class to format the parent/children hierarchy for Programs and Services
      $(context).find('#edit-field-affiliate-programs').once('termHierarchy').each(function(){
        $(this).find('> div').each(function(){
          var row = $(this);
          var thisLabel = row.find('label').text(); //get the label
          if(thisLabel.charAt(0) === '-'){ //see if it has a dash
            row.addClass('term-child'); //add a class for formatting
            row.find('label').text(thisLabel.substring(1)); //remove the dash
          } else {
            row.addClass('term-parent'); //add a class for formatting
          }
        });
        
        $('.term-parent').each(function(){
          $(this).nextUntil('.term-parent').wrapAll( "<div class='term-child-wrapper' />");
        });
      });
      
      //When clicking on children, if any one is checked, then check the parent
      //When parent is checked, check or uncheck all children
      
      var toggleChecks = true; //global variable to determine if action should run
      
      ///Click action on a child term
      $('.term-child input').on('change', function(){
        var whichCheck = $(this);
        var activeCheck = false;
        toggleChecks = false;
        whichCheck.parents('.term-child-wrapper').find('input').each(function(){
          if($(this).is(':checked')){
            activeCheck = true;
          }
        }).promise().done(function(){
          if(activeCheck){
            whichCheck.parents('.term-child-wrapper').prev().find('input').prop('checked', true);
          } else {
            whichCheck.parents('.term-child-wrapper').prev().find('input').prop('checked', false);
          }
          toggleChecks = true;
        });
      });
      
      //Select action on parent term
      $('.term-parent input').on('change', function(){
        if(toggleChecks){
          if($(this).is(':checked')){
            $(this).parents('.term-parent').next().find('input').each(function(){
              $(this).prop('checked', true);
            });
          } else {
            $(this).parents('.term-parent').next().find('input').each(function(){
              $(this).prop('checked', false);
            });
          }
        }
      });
      

      // Execute code once the window is fully loaded.
      //----------------------------------------------------------------------------------------------
      $(window).on('load', function () {

        
      });



      // Execute code when the window is resized.
      //----------------------------------------------------------------------------------------------
      $(window).resize(function () {

      });


      // Execute code when the window scrolls.
      //----------------------------------------------------------------------------------------------
      $(window).scroll(function () {
        
      });

    }
  };

} (Drupal, jQuery, this));
