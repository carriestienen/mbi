<?php
$title = 'Add/Edit Survey';
$custom_class = 'admin edit';

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

<h1><a href="surveys.php">&laquo;</a> | Add/Edit Survey</h1>

<main class="edit-survey">
  <div class="half-wrapper">

    <div class="half-1">
      <div class="question">
        <label for="question">Survey Question:</label>
        <input id="question" name="question" type="text" value="What is that awful smell?">
      </div>

      <div class="controls">
        <a href="surveys.php"><button class="save">Save</button></a>
        <a href="surveys.php"><button class="cancel">Cancel</button></a>
        <a href="surveys.php"><button class="delete">Delete</button></a>
      </div>
    </div>

    <div class="half-2">
      <div class="survey-answers">
  <?php for ($i = 0; $i < 8; $i++) { ?>
        <div class="survey-answer">
          <div class="num-circle"><span><?php print ($i + 1); ?></span></div>
          <div class="label"><input type="text" value="<?php print $data[$i][0] ?>" placeholder="answer" /></div>
          <div class="value"><input type="number" value="<?php print $data[$i][1] ?>" placeholder="#" min="0" max="100" step="1" /></div>
        </div>
  <?php } ?>
      </div>
    </div>

  </div>
</main>

<?php include '../include/footer.php'; ?>