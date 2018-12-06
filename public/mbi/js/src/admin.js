/* Admin JS */
jQuery(document).ready(function($) {

  // Edit Game
  $('.edit-game').each(function() {

    // Draggable Survey
    $('.survey').draggable({
      cursor: 'grabbing',
      helper: 'clone',
      revert: 'invalid',
      revertDuration: 300,
      snap: '.survey-target',
      snapMode: 'inner',
      start: function(e,ui) {
        ui.helper.width($(this).outerWidth());
      },
    });

    // Survey Target
    $('.survey-target').droppable({
      accept: '.survey',
      drop: function(e,ui) {
        $(this).prepend(ui.draggable);
        $(this).addClass('dropped').droppable('option','accept',ui.draggable);
      },
      out: function(e,ui) {
        $(this).removeClass('dropped').droppable('option','accept','.survey');
      }
    });

    // Back to the List
    $('.survey-grid').droppable({
      accept: '.survey',
      drop: function(e,ui) {
        $(this).append(ui.draggable);
      },
    });

  }); // edit game

  // Gameplay
  $('#admin-game-board').each(function() {
    var score = 0,
        subTotal = $(this).find('#sub-total');

    $(this).find('.visibility-toggle').click(function() {
      var answer = $(this).parent();

      score = score + (parseInt(answer.find('.value').text()) * (answer.hasClass('on') ? -1 : 1));
      answer.toggleClass('on');
      subTotal.text(score);
    });

  }); // gameplay

  // Final Round
  $('.final-round').each(function() {
    var score = 0,
        total = $(this).find('#total');

    $(this).find('.visibility-toggle').click(function() {
      $(this).parent().toggleClass('on');
    });

    // Each Question
    $(this).find('.question').each(function(i,q) {
      $(this).find('.answer').draggable({
        cursor: 'grabbing',
        helper: 'clone',
        revertDuration: 300,
        revert: true,
        scope: 'q-' + i,
        snapMode: 'inner',
        start: function(e,ui) {
          ui.helper.width($(this).outerWidth()).height($(this).outerHeight());
          $(this).addClass('dragging');
        },
        stop: function(e,ui) {
          $(this).removeClass('dragging');
        },
        zIndex: 50,
      });

      $(this).find('.player').droppable({
        accept: '.answer',
        scope: 'q-' + i,
        drop: function(e,ui) {
          $(this).find('.label').children('input').val(ui.draggable.find('.label').text());
          $(this).find('.value').children('input').val(ui.draggable.find('.value').text());
        },
      });
    }); // each question
  });

}); // admin js