<?php

$round = '1';

$data = array(
  array('Poop', 40),
  array('Everything', 24),
  array('Farts', 18),
  array('New Jersey', 12),
  array('The Trash', 4),
  array('Donald Trump', 2),
);

$title = 'Round ' . $round;

include '../include/functions.php';
include '../include/header-admin.php';
?>

<h1><span class="dd">DD</span> &rsaquo; Round <?php print $round; ?></h1>

<main>

<!-- Admin Gameboard -->
  <div id="sub-total">0</div>
  <div id="team-1">0</div>
  <div id="team-2">0</div>

  <div id="gameboard">
    <div class="col">
<?php
  for ($i = 0; $i < 8; $i++) {
    if(array_key_exists($i, $data)) {
?>
      <div id="answer-<?php print ($i + 1); ?>" class="answer">
        <?php include 'toggle.php'; ?>
        <div class="text"><?php print $data[$i][0]; ?></div>
        <div class="value"><?php print $data[$i][1]; ?></div>
      </div>
<?php
    }
    if($i === 3) {
?>
    </div>
    <div class="col">
<?php
    }
  }
?>
    </div>
  </div>
<!-- / admin gameboard -->

<!-- Admin Round Controls -->
  <div id="round-controls">
    <div class="col col-1">

      <div class="startup-switch">
        <button id="initial-state">1 - Activate Initial State</button><div class="light"></div>
      </div>
      <div class="startup-switch">
        <button id="show-blanks" disabled>2 - Show Blanks</button><div class="light"></div>
      </div>
      <div class="startup-switch">
        <button id="capture-button" disabled>3 - Capture Button</button><div class="light"></div>
      </div>

    </div>
    <div class="col col-2">

      <div id="team-toggle" class="disabled">
        <div id="toggle-team-1" class="label">Team 1</div>
        <div id="the-toggle"><div id="the-toggle-knob"></div><div id="toggle-center" title="clear active teams"></div></div>
        <div id="toggle-team-2" class="label">Team 2</div>
      </div>
      <div id="wrong-buttons">
        <button id="wrong-1" class="wrong" disabled>X</button>
        <button id="wrong-2" class="wrong" disabled>XX</button>
        <button id="wrong-3" class="wrong" disabled>XXX</button>
        <button id="wrong-clear" disabled>clear</button>
      </div>

    </div>
    <div class="col col-3">
      
      <?php include '../include/audio-admin.php'; ?>

      <div id="endgame">
        <button id="end-round" disabled>It's All Over!</button>
        <button id="next-round" disabled>Next Round &raquo;</button>
      </div>

    </div>
  </div>
<!-- /admin round controls -->

</main>

<?php include '../include/footer-admin.php'; ?>