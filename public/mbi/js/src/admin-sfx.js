/* Admin - Sound Effects JS */
jQuery(document).ready(function($) {

  // Sound Effect Buttons
  $('#sfx').find('button').each(function(i,b) {

    // Audio
    var a = $(b).next();

    // Click
    $(b).click(function() {
      $(b).addClass('active');
      a.trigger('play');

      setTimeout(function() {
        $(b).removeClass('active');
      },((a[0].duration * 1000) + 50));
    });

  }); // sound effect buttons

}); // admin js