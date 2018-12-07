/* Admin - Final Round JS */
jQuery(document).ready(function($) {
  if($('#final-round-controls').length) {

    // Variables
    startup = $('#final-initial-state'),
    endGame = $('#end-game'),
    grandTotal = $('#grand-total'),
    audienceTotal = $('#audience-total'),
    answerTexts = $('.player-answer-text'),
    answerValues = $('.player-answer-value'),
    p1Text = $('.player-1-text'),
    p1Show = $('#player-1-show-all'),
    p1Hide = $('#player-1-hide-all'),
    p2Text = $('.player-2-text'),
    p2Show = $('#player-2-show-all'),
    p2Hide = $('#player-2-hide-all');

    // Initialize
    startup.click(function() {

      // Active
      startup.attr('disabled','disabled').parent().addClass('active');

      // Enable Buttons
      endGame.removeAttr('disabled');
      p1Show.removeAttr('disabled');
      p1Hide.removeAttr('disabled');
      p2Show.removeAttr('disabled');
      p2Hide.removeAttr('disabled');

      // Visibility Toggles
      $('.visibility-toggle').each(function(i,t) {

        // Variables
        var p = $(t).parent();

        // Click
        $(t).click(function() {

          // Toggle 'Active'
          p.toggleClass('active');

          // Value v Text
          if(p.hasClass('value') && p.find('input').val()) {

            // Get Value
            var v = parseInt(p.find('input').val());

            // Update Score
            audienceTotal.text(parseInt(audienceTotal.text()) + (p.hasClass('active') ? v : -v ));

          } // value v text

        }); // click

      }); // visibility toggles

    }); // initialize

    // End Game
    endGame.click(function() {

      // CONFIRM
      if(confirm('Are you SURE you want to end the round? You CANNOT un-do this!')) {

        // END THE GAME FOREVER!
        alert('it is done');

      } // confirm

    }); // end game

    // Text Input - Lose Focus
    answerTexts.blur(function() {});

    // Value Input - Lose Focus
    answerValues.blur(function() {
      var v = 0;

      // Add 'Em Up
      answerValues.each(function() {
        if($(this).val()) {
          v = v + parseInt($(this).val());
        }
      }); // add 'em up

      // Update Total
      grandTotal.text(v);

    }); // input value blur

    // P1: Show
    p1Show.click(function() {

      // Activate!
      p1Text.not('.active').find('.visibility-toggle').click();

    }); // p1: show

    // P1: Hide
    p1Hide.click(function() {

      p1Text.filter('.active').find('.visibility-toggle').click();

    }); // p1: hide

    // P2: Show
    p2Show.click(function() {

      // Activate!
      p2Text.not('.active').find('.visibility-toggle').click();

    }); // p2: show

    // P2: Hide
    p2Hide.click(function() {

      p2Text.filter('.active').find('.visibility-toggle').click();

    }); // p2: hide

  }
}); // admin js