<?php
$title = 'Surveys';
$custom_class = 'admin';

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

<h1><a href="startup.php">&laquo;</a> | Survey Q's &amp; A's</h1>

<main class="surveys">
  <a href="edit-survey.php"><button id="add-new">Add New +</button></a>

  <div class="survey-grid">
<?php foreach ($surveys as $survey) { ?>
    <div class="survey">
      <a href="edit-survey.php"><?php print $survey; ?></a>
    </div>
<?php } ?>
  </div>

</main>

<?php include '../include/footer.php'; ?>