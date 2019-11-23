jQuery('.form-radio').on('click', function() {
  jQuery('.form-radio:checked').each(function() {
    jQuery(this).addClass('active-radio');
  });
  jQuery('.form-radio:not(:checked)').each(function() {
    jQuery(this).removeClass('active-radio');
  })
});