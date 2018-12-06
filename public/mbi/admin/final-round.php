<?php
$title = 'Final Round';
$custom_class = 'admin';

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

include '../include/functions.php';
include '../include/header.php';
?>

<h1><a href="gameplay.php">&laquo;</a> | Round 2</h1>

<main class="final-round">
  <div class="survey-grid">
<?php foreach ($surveys as $i => $survey) { ?>
    <div class="question">
      <div class="player p1">
        <div class="label">
          <input type="text" placeholder="answer <?php print ($i + 1); ?>" />
          <?php include 'toggle.php'; ?>
        </div>
        <div class="value">
          <input type="number" placeholder="#" min="0" max="100" step="1" />
          <?php include 'toggle.php'; ?>
        </div>
        <div class="num-circle"><span><?php print ($i + 1); ?></span></div>
      </div>

      <div class="answers">
        <div class="col">
<?php for ($j = 0; $j < 8; $j++) {
  $blank = !array_key_exists($j, $survey); ?>
          <div class="answer">
            <div class="label"><?php print ($blank ? '-' : $survey[$j][0]); ?></div>
            <div class="value"><?php print ($blank ? '0' : $survey[$j][1]); ?></div>
          </div>
<?php   if($j === 3) { ?>
        </div>
        <div class="col">
<?php   } ?>
<?php } ?>
        </div>
      </div>

      <div class="player p2">
        <div class="label">
          <input type="text" placeholder="answer <?php print ($i + 1); ?>" />
          <?php include 'toggle.php'; ?>
        </div>
        <div class="value">
          <input type="number" placeholder="#" min="0" max="100" step="1" />
          <?php include 'toggle.php'; ?>
        </div>
        <div class="num-circle"><span><?php print ($i + 1); ?></span></div>
      </div>
    </div>
<?php } ?>
  </div>

<?php include 'admin-controls.php'; ?>
</main>

<?php include '../include/footer.php'; ?>