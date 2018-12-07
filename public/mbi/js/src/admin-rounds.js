/* Admin - Regular Round JS */
jQuery(document).ready(function($) {
  if($('#round-controls').length) {

    // Variables
    var body = $('body'),
        startup_1 = $('#initial-state'),
        startup_2 = $('#show-blanks'),
        startup_3 = $('#capture-button'),
        endRound = $('#end-round'),
        nextRound = $('#next-round'),
        subTotal = $('#sub-total'),
        team_1 = $('#team-1'),
        team_2 = $('#team-2'),
        toggle_0 = $('#toggle-center'),
        toggle_1 = $('#toggle-team-1'),
        toggle_2 = $('#toggle-team-2'),
        wrong_0 = $('#wrong-clear'),
        wrongs = $('.wrong');

    // Startup - 1
    startup_1.click(function() {

      // 'Active'
      startup_1.attr('disabled','disabled').parent().addClass('active');

      // Enable Step 2
      startup_2.removeAttr('disabled');

    }); // startup 1

    // Startup - 2
    startup_2.click(function() {

      // 'Active'
      startup_2.attr('disabled','disabled').parent().addClass('active');

      // Enable Step 2
      startup_3.removeAttr('disabled');

      // Visibility Toggles
      $('.visibility-toggle').each(function(i,t) {

        // Variables
        var p = $(t).parent(),
            v = parseInt($(t).siblings('.value').text());

        // Click
        $(t).click(function() {

          // Check Status
          if(body.hasClass('end-round')) {

            // Toggle Alt 'Active'
            p.toggleClass('alt-active');

          } else {

            // Toggle 'Active'
            p.toggleClass('active');

            // Update Score
            subTotal.text(parseInt(subTotal.text()) + (p.hasClass('active') ? v : -v ));

          } // check status

        }); // click

      }); // visibility toggles

    }); // startup 2

    // Startup - 3
    startup_3.click(function() {

      // Toggle 'Active' (for re-use)
      $(this).parent().toggleClass('active');

      // Enable Features
      endRound.removeAttr('disabled');
      toggle_1.parent().removeClass('disabled');
      wrongs.removeAttr('disabled');

    }); // startup 3

    // No Team
    toggle_0.mouseover(function() {

      // Hover
      toggle_0.parent().addClass('hover');
    }).click(function() {

      // Clear Teams
      body.removeClass('team-1 team-2');
    }).mouseout(function() {

      // De-Hover
      toggle_0.parent().removeClass('hover');

    }); // no team

    // Team 1
    toggle_1.click(function() {
      body.addClass('team-1').removeClass('team-2');
    });

    // Team 2
    toggle_2.click(function() {
      body.addClass('team-2').removeClass('team-1');
    });

    // Clear Wrongs
    wrong_0.click(function() {

      // Cleared!
      wrongs.removeClass('active');

      // Disable Self
      wrong_0.attr('disabled','disabled');

    }); // clear wrongs

    // Wrong Buttons
    wrongs.each(function(i,w) {

      // Click
      $(w).click(function() {

        // Disable Siblings
        wrongs.removeClass('active');

        // Activate Self
        $(w).addClass('active');

        // Enable Clear
        wrong_0.removeAttr('disabled');

      }); // click

    }); // wrong buttons

    // All Over
    endRound.click(function() {

      // Check Team
      if(body.hasClass('team-1') || body.hasClass('team-2')) {

        // CONFIRM
        if(confirm('Are you SURE you want to end the round? You CANNOT un-do this!')) {

          // Toggle 'Active'
          $(this).addClass('active').attr('disabled','disabled');

          // End the Round
          body.addClass('end-round');

          // Enable Features
          nextRound.removeAttr('disabled');

          // Winner!
          var winner = (body.hasClass('team-1') ? team_1 : team_2);

          // Update Score
          winner.text(parseInt(winner.text()) + parseInt(subTotal.text()));

        } // confirm

      } else {

        // Error
        alert('There must be a winning team selected in order to end the round.');

      } // check team

    }); // all over

    // Next Round
    nextRound.click(function() {

      // CONFIRM
      if(confirm('Are you SURE you want to end the round? You CANNOT un-do this!')) {

        // TODO: Go to the next round :D
        alert('you are now at the next round.');

      } // confirm

    }); // next round

  }
}); // admin js