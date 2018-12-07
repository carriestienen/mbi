<?php
$title = 'Games';
$custom_class = 'admin';

$file_lines = file('../game_data/games.csv');

/* $games = array(
  array('MBI Holiday Party 2018', 'Tue, May 4, 2017'),
  array('Redwood Retirement Community', 'Mon, Jun 15, 2019'),
  array('Lensworth &amp; Associates Company Outing', 'Sat, Nov 5, 2018'),
  array('10/28 5:30PM All-Ages Show', 'Sun, Jun 21, 2008'),
); */

$games = [];
foreach($file_lines as $line){
  $line_content = explode(",",$line);
  $temp = array($line,"Sun, Jun 21, 2008");
  array_push($games,$temp);
}

include '../include/functions.php';
include '../include/header.php';
?>

<h1><a href="startup.php">&laquo;</a> | Games</h1>

<main class="games">
  <a href="edit-game.php"><button id="add-new">Add New +</button></a>

  <div class="game-grid">
    <div class="game header">
      <div class="name">game</div>
      <div class="date">modified</div>
      <div class="buttons"></div>
    </div>
<?php foreach ($games as $g) { 
    $index = array_search($g, $games); ?>
    <div class="game">
      <div class="name"><?php print $g[0]; ?></a></div>
      <div class="date"><?php print $g[1]; ?></div>
      <div class="buttons">
        <?php echo '<a href="gameplay.php?id='.$index.'"><button class="play">Play</button></a>'; ?>
        <?php echo '<a href="edit-game.php?id='.$index.'"><button class="edit">Edit</button></a>'; ?>
        <a href="edit-game.php"><button class="copy">Copy</button></a>
        <a href="#"><button class="delete">Delete</button></a>
      </div>
    </div>
<?php } ?>
  </div>

</main>

<?php include '../include/footer.php'; ?>