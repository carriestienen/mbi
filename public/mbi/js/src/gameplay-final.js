/* Gameplay - Final Round JS */
jQuery(document).ready(function($) {
  if($('main').hasClass('final')) {

    // Variables
    var body = $('body'),
        timer = $('#timer'),
        total = $('#total'),
        wrong = $('#sfx-wrong'),
        correct = $('#sfx-correct');

    // Update Text
    function update_text(p,n,data) {
      $('#player-' + p + '-answer-' + n).find('.player-text').children('span').text(data);
    }

    // Toggle Text
    function toggle_text(p,n) {
      var t = $('#player-' + p + '-answer-' + n).find('.player-text');

      // Answered
      if(!t.hasClass('active')) {
        if(t.text() !== '-') {
          correct.trigger('play');
        }
      }

      // Toggle Active
      t.toggleClass('active');

    } // toggle_text()

    // Update Value
    function update_value(p,n,data) {
      $('#player-' + p + '-answer-' + n).find('.player-value').children('span').text(data);
    }

    // Toggle Value
    function toggle_value(p,n) {
      var p = $('#player-' + p + '-answer-' + n).find('.player-value'),
          v = parseInt(p.text());

      // Error Fix
      if(total.text() == '') {
        total.text(0);
      }

      // Zero
      if(!p.hasClass('active')) {
        if(v === 0) {
          wrong.trigger('play');
        }
      }

      // Toggle 'Active'
      p.toggleClass('active');

      // Update total
      total.text(parseInt(total.text()) + (p.hasClass('active') ? v : -v));

    } // toggle_value()

  }
}); // end gameboard js