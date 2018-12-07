<?php
$title = 'Splash';
$custom_class = 'game';

$file_lines = file('../game_data/surveys.csv');

//array of arrays
//each array will contain two items, game name and gameid number
$game_data = [];
for ($i = 0; $i < count($file_lines); $i++) {
  $line = $file_lines[$i];
  $line_content = explode(",",$line);
  $name = $line_content[0];
  $temp = array($name,$i);           
  $game_data[] = array_push($game_data, $temp);
}

include '../include/functions.php';
include '../include/header.php';


echo '<main class="splash">
  <div id="dd-logo"><img src="../images/dd_logo.png" alt="Dynasty Dispute" /></div>
  <div id="presented">presented by</div>
  <div id="mbi-logo"><img src="../images/mbi_logo.png" alt="Monkey Business Institute" /></div>
</main>

<div class="demo-nav">
  <a href="../index.php" class="prev" title="(demo only)">&laquo; PREV</a>';
    foreach($game_data as $game) {
      $name = $game[0];
      $id = $game[1];
      echo '<a href="board.php?id='.$id.'" class="next" title="(demo only)">'.$name.' &raquo;</a>';
    }
  ?>
  <!-- <a href="board.php" class="next" title="(demo only)">NEXT &raquo;</a> -->
  <!-- <a href="game1.php" class="next" title="(demo only)">GAME 1 &raquo;</a>
  <a href="game2.php" class="next" title="(demo only)">GAME 2 &raquo;</a>
  <a href="game3.php" class="next" title="(demo only)">GAME 3 &raquo;</a> -->
</div>

<?php include '../include/footer.php'; ?>