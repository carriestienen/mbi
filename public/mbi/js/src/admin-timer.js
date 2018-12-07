/* Admin - Timer JS */
jQuery(document).ready(function($) {
  if($('#admin-timer').length) {

    // Variables
    var tTimeout,
        tInterval,
        tShow = $('#show-timer'),
        tHide = $('#hide-timer'),
        tDisplay = $('#admin-timer-display'),
        tStart = $('#timer-start'),
        tStop = $('#timer-stop'),
        tReset = $('#timer-reset');

    // Start
    function start_timer() {

      // Ultimate Timeout
      tTimeout = setTimeout(function() {
        clearInterval(tInterval);
      },(parseInt(tDisplay.text()) * 1000));

      // Update Display
      tInterval = setInterval(function() {
        tDisplay.text(parseInt(tDisplay.text()) - 1);
      },1000);

    } // start_timer()

    // Stop
    function stop_timer() {
      clearTimeout(tTimeout);
      clearInterval(tInterval);
    } // stop_timer()

    // Reset
    function reset_timer() {
      tDisplay.text(90);
    }

    function activate_button(b) {
      b.addClass('active').attr('disabled','disabled');
    }

    function enable_button(b) {
      b.removeClass('active').removeAttr('disabled');
    }

    function disable_button(b) {
      b.removeClass('active').attr('disabled','disabled');
    }

    // Show Timer
    tShow.click(function() {

      // Activate Self
      activate_button(tShow);

      // Deactivate Hide
      enable_button(tHide);

      // Activate Display
      tDisplay.addClass('active');

      // Enable Start
      enable_button(tStart);

    }); // show timer

    // Hide Timer
    tHide.click(function() {

      // Activate Self
      activate_button(tHide);

      // Deactivate Hide
      enable_button(tShow);

      // Deactivate Display
      tDisplay.removeClass('active');

      // Disable Buttons
      disable_button(tStart);
      disable_button(tStop);
      disable_button(tReset);

      // Stop Timer
      stop_timer();

    }); // hide timer

    // Start Timer
    tStart.click(function() {

      // Start
      start_timer();

      // Toggle Buttons
      activate_button(tStart);
      enable_button(tStop);
      disable_button(tReset);

    }); // start timer

    // Stop Timer
    tStop.click(function() {

      // Stop
      stop_timer();

      // Toggle Buttons
      enable_button(tStart);
      activate_button(tStop);
      enable_button(tReset);


    }); // stop timer

    // Reset Timer
    tReset.click(function() {

      // Reset
      reset_timer();

      // Toggle Buttons
      enable_button(tStart);
      disable_button(tStop);
      disable_button(tReset);

    }); // reset timer

  }
}); // admin js