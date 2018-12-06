<?php
$title = 'Round 2 Board';
$custom_class = 'game';

$data = array(
  array('Poop', 40),
  array('Everything', 24),
  array('Farts', 18),
  array('New Jersey', 12),
  array('The Trash', 4),
  array('Donald Trump', 2),
);

include '../include/functions.php';
include '../include/header.php';
?>

<main class="board">
  <div id="game-board" class="oval team-1">

    <div id="sub-total">0</div>
    <div id="team-1">0</div>
    <div id="team-2">84</div>

    <div class="answers">
      <div class="col">
<?php
  for ($i = 0; $i < 8; $i++) {
    if(array_key_exists($i, $data)) {
?>
        <div class="answer">
          <div class="back"><span><?php print ($i + 1); ?></span></div>
          <div class="front">
            <div class="label"><?php print $data[$i][0]; ?></div>
            <div class="value"><?php print $data[$i][1]; ?></div>
          </div>
        </div>
<?php } else { ?>
        <div class="answer blank"></div>
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

  </div>
</main>

<div class="demo-nav">
  <a href="splash.php" class="prev" title="(demo only)">&laquo; PREV</a>
  <a href="board-wrong.php" class="next" title="(demo only)">NEXT &raquo;</a>
</div>

<?php include '../include/footer.php'; ?>