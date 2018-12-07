<?php

$surveys = array(
  array(
    array('Taco',23),
    array('Chorizo',18),
    array('Nacho Cheese',16),
    array('Burito',10),
    array('Chalupa',10),
    array('Salsa',9),
    array('Barbacoa',9),
    array('Rice',5),
  ),
  array(
    array('Answer One',23),
    array('Answer Two',18),
    array('Answer Three',16),
    array('Answer Four',10),
    array('Answer Five',10),
    array('Answer Six',9),
    array('Answer Seven',9),
    array('Answer Eight',5),
  ),
  array(
    array('Answer One',23),
    array('Answer Two',18),
    array('Answer Three',16),
    array('Answer Four',10),
    array('Answer Five',10),
    array('Answer Six',9),
    array('Answer Seven',9),
    array('Answer Eight',5),
  ),
  array(
    array('Answer One',23),
    array('Answer Two',18),
    array('Answer Three',16),
    array('Answer Four',10),
    array('Answer Five',10),
    array('Answer Six',9),
    array('Answer Seven',9),
    array('Answer Eight',5),
  ),
  array(
    array('Answer One',23),
    array('Answer Two',18),
    array('Answer Three',19),
    array('Answer Four',16),
    array('Answer Five',15),
    array('Answer Six',9),
  ),
);

$title = 'Final Round ';

include '../include/functions.php';
include '../include/header-admin.php';
?>

<h1><span class="dd">DD</span> &rsaquo; Final Round</h1>

<main>

<!-- Admin Gameboard -->
  <div id="final-round-form">
<?php for ($i = 0; $i < 5; $i++) { ?>
    <div id="question-<?php print ($i + 1); ?>" class="question">

      <div id="player-1-question-<?php print ($i + 1); ?>" class="player">
        <div class="text player-1-text">
          <?php include 'toggle.php'; ?>
          <input id="player-1-question-<?php print ($i + 1); ?>-text" class="player-answer-text" type="text" placeholder="answer <?php print ($i + 1); ?>" />
        </div>
        <div class="value">
          <?php include 'toggle.php'; ?>
          <input id="player-1-question-<?php print ($i + 1); ?>-value" class="player-answer-value" type="number" placeholder="#" min="0" max="100" step="1" />
        </div>
      </div>

      <div class="answers">
        <div class="col">
<?php for ($j = 0; $j < 8; $j++) {
  $blank = !array_key_exists($j, $surveys[$i]); ?>
          <div class="answer">
            <div class="text"><?php print ($blank ? '-' : $surveys[$i][$j][0]); ?></div>
            <div class="value"><?php print ($blank ? '0' : $surveys[$i][$j][1]); ?></div>
          </div>
<?php   if($j === 3) { ?>
        </div>
        <div class="col">
<?php   } ?>
<?php } ?>
        </div>
      </div>

      <div id="player-2-question-<?php print ($i + 1); ?>" class="player">
        <div class="text player-2-text">
          <?php include 'toggle.php'; ?>
          <input id="player-2-question-<?php print ($i + 1); ?>-text" class="player-answer-text" type="text" placeholder="answer <?php print ($i + 1); ?>" />
        </div>
        <div class="value">
          <?php include 'toggle.php'; ?>
          <input id="player-2-question-<?php print ($i + 1); ?>-value" class="player-answer-value" type="number" placeholder="#" min="0" max="100" step="1" />
        </div>
      </div>

    </div>
<?php } ?>
  </div>
<!-- / admin gameboard -->

<!-- Admin Final Controls -->
  <div id="final-round-controls">
    <div class="col col-1">

      <div id="admin-timer">
        <div id="admin-timer-toggle">
          <button id="show-timer"><?php include '../images/icons/show.svg'; ?></button>
          <button id="hide-timer" class="active" disabled><?php include '../images/icons/hide.svg'; ?></button>
        </div>
        <div id="admin-timer-display">90</div>
        <button id="timer-start" disabled>Start</button>
        <button id="timer-stop" disabled>Stop</button>
        <button id="timer-reset" disabled>Reset</button>
      </div>

      <div id="player-1-controls" class="player-visibility">
        <button id="player-1-show-all" disabled>Show All Answers</button>
        <button id="player-1-hide-all" disabled>Hide All Answers</button>
      </div>

    </div>
    <div class="col col-2">

      <div id="score-boards">
        <div class="col">
          <span>Grand Total</span>
          <div id="grand-total">0</div>
        </div>
        <div class="col">
          <span>Audience Total</span>
          <div id="audience-total">0</div>
        </div>
      </div>

      <div id="alpha-omega">
        <div class="startup-switch">
          <button id="final-initial-state">1 - Activate Initial State</button>
          <div class="light"></div>
        </div>
        <button id="end-game" disabled>END GAME</button>
      </div>

    </div>
    <div class="col col-3">
      
      <?php include '../include/audio-admin.php'; ?>

      <div id="player-2-controls" class="player-visibility">
        <button id="player-2-show-all" disabled>Show All Answers</button>
        <button id="player-2-hide-all" disabled>Hide All Answers</button>
      </div>

    </div>
  </div>
<!-- /admin final round controls -->

</main>

<?php include '../include/footer-admin.php'; ?>