<?php
$title = 'Add/Edit Game';
$custom_class = 'admin edit';

$rounds = array(
  'Round One',
  'Round Two',
  'Tie-Breaker',
  'Final Round',
);

$surveys = array(
  'What is that awful smell?',
  'What is something you\'d never leave home without?',
  'What country would you live in outsize the US?',
  'What\'s your most common bad dream?',
  'Who would you cosplay as, if time and money weren\'t a concern?',
  'What is your favorite Venture Bros. character?',
  'What would you buy first after winning the lottery?',
  'After the world economy collapses, what will replace the U.S. dollar as the primary currency in society?',
  'Where did you leave your keys?',
);

include '../include/functions.php';
include '../include/header.php';
?>

<h1><a href="games.php">&laquo;</a> | Add/Edit Game</h1>

<main class="edit-game">
  <div class="half-wrapper">

    <div class="half-1">
      <div class="game-name">
        <label for="game-name">Game Name:</label>
        <input id="game-name" name="game-name" type="text" value="MBI Holiday Party 2018">
      </div>

      <div class="rounds">
<?php foreach ($rounds as $i => $round) { ?>
<?php $n = ($i === count($rounds) - 1) ? 5 : 1; ?>
        <div class="round<?php if($n === 5) {?> final<?php } ?>">
          <h2><?php print $round; ?></h2>
<?php   for ($j = 1; $j <= $n; $j++) { ?>
          <div class="target-wrapper">
<?php     if($n === 5) { ?>
            <div class="num-circle"><span><?php print $j; ?></span></div>
<?php     } ?>
            <div class="survey-target"><span>&larr; drag &amp; drop a survey question here</span></div>
          </div>
<?php   } ?>

        </div>
<?php } ?>
      </div>

      <div class="controls">
        <a href="games.php"><button class="save">Save</button></a>
        <a href="games.php"><button class="cancel">Cancel</button></a>
        <a href="games.php"><button class="delete">Delete</button></a>
      </div>
    </div>

    <div class="half-2">
      <div class="survey-grid">
  <?php foreach ($surveys as $survey) { ?>
        <div class="survey">
          <span><?php print $survey; ?></span>
        </div>
  <?php } ?>
      </div>
    </div>

  </div>
</main>

<?php include '../include/footer.php'; ?>