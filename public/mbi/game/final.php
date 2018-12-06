<?php
$title = 'Round 2 Board';
$custom_class = 'game';

$players = array(
  array(
    array('Nacho Cheese', 16),
    array('Sandals Resort', 0),
    array('Macy\'s', 22),
    array('Canned Yeast', 9),
    array('Twix', 30),
  ),
  array(
    array('Burritos', 10),
    array('Florida Keys', 6),
    array('Target', 34),
    array('-', 0),
    array('Snickers', 17),
  ),
);

include '../include/functions.php';
include '../include/header.php';
?>

<main class="board final">
  <div id="game-board" class="oval">

    <div id="sub-total"><img src="../images/dd_logo.png" alt="Dynasty Dispute" /></div>
    <div id="total">0</div>

    <div class="answers">
<?php foreach ($players as $player) { ?>
      <div class="col">
<?php foreach ($player as $answer) { ?>
        <div class="player-answer">
          <div class="wrapper">
            <div class="label"><span><?php print $answer[0]; ?></span></div>
            <div class="value"><span><?php print $answer[1]; ?></span></div>
          </div>
        </div>
<?php } ?>
      </div>
<?php } ?>
    </div>

  </div>
</main>

<div class="demo-nav">
  <a href="board-wrong.php" class="prev" title="(demo only)">&laquo; PREV</a>
</div>

<?php include '../include/footer.php'; ?>