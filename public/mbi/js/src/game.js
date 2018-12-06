/* Gameboard JS */
jQuery(document).ready(function($) {

  $('#game-board').each(function() {
    var score = 0,
        subTotal = $(this).find('#sub-total'),
        total = $(this).find('#total');

    if($(this).parent().hasClass('final')) {

      $(this).find('.player-answer').find('.label, .value').click(function() {
        if(!$(this).hasClass('on')) {
          $(this).addClass('on');

          if($(this).hasClass('value')) {
            var val = parseInt($(this).text());
            if(val > 0) {
              score = score + val;
              total.text(score);
            } else {
// TODO: Play Error SFX
            }
          }
        }
      });

    } else {

      $(this).find('.answer').not('.blank').click(function() {
        if(!$(this).hasClass('on')) {
          $(this).addClass('on');
          score = score + parseInt($(this).find('.value').text());
          subTotal.text(score);
        }
      });

      subTotal.click(function() {
        $('#game-board').toggleClass('team-1 team-2');
      });

    }

  });

}); // end gameboard js