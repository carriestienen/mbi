<?php
$title = 'Admin Startup';
$custom_class = 'admin';

include '../include/functions.php';
include '../include/header.php';
?>

<h1><a href="../index.php">&laquo;</a> | Dynasty Dispute Admin</h1>

<main class="startup">
  <div class="options">
    <a href="games.php">
      <?php include '../images/icons/game.svg'; ?>
      Games
    </a>
    <a href="surveys.php">
      <?php include '../images/icons/survey.svg'; ?>
      Survey Q's &amp; A's
    </a>
  </div>
</main>

<?php include '../include/footer.php'; ?>
