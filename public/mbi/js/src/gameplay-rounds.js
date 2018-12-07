/* Gameplay - Regular Rounds JS */
jQuery(document).ready(function($) {
  if($('main').hasClass('rounds')) {

    // Variables
    var body = $('body'),
        subTotal = $('#sub-total'),
        team1 = $('#team-1'),
        team2 = $('#team-2');

    function show_blanks() {
      $('#gameboard').addClass('show-blanks');
    }

    // Set Team
    function set_team(n) {
      body.removeClass('team-1 team-2');
      body.addClass('team-' + n);
    }

    // Toggle Answer
    function toggle_answer(n) {

      // Variables
      var a = $('#answer-' + n),
          v = parseInt(a.find('.value').text());

      // Check Status
      if(body.hasClass('end-round')) {

        // Toggle Alt 'Active'
        a.toggleClass('alt-active');

      } else {

        // Toggle Active
        a.toggleClass('active');

        // NOICE!
        if(a.hasClass('active')) {
          $('#sfx-correct').trigger('play');
        }

        // Update Sub-Total
        subTotal.text(parseInt(subTotal.text()) + (a.hasClass('active') ? v : -v));

      } // check status

    } // toggle_answer()

    // Wrong!
    function wrong(n) {

      // Get Correct # of X's
      var w = $('#wrong-' + n);

      // Nooooope!
      $('#sfx-wrong').trigger('play');

      // Activate
      w.addClass('active');

      // Clear It
      setTimeout(function() {
        w.removeClass('active');
      },1850);

    } // wrong

    // End Round
    function end_round() {
      
      // Add Class
      body.addClass('end-round');

      // Add Score
      if(body.hasClass('team-1')) {
        team1.text(parseInt(team1.text()) + parseInt(subTotal.text()));
      } else if(body.hasClass('team-2')) {
        team2.text(parseInt(team2.text()) + parseInt(subTotal.text()));
      }

      // Clear Sub-Total
      subTotal.text('');

    } // end_round()

  }
}); // end gameboard js