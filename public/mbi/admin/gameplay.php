<?php
$title = 'Round 2';
$custom_class = 'admin';

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

<h1><a href="games.php">&laquo;</a> | Round 2</h1>

<main class="gameplay">
  <div id="admin-game-board" class="team-1">

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
          <div class="label"><?php print $data[$i][0]; ?></div>
          <div class="value"><?php print $data[$i][1]; ?></div>
          <?php include 'toggle.php'; ?>
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

<?php include 'admin-controls.php'; ?>
</main>

<?php include '../include/footer.php'; ?>