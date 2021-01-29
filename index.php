<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <title>Gradient Generator</title>
  </head>
  <body>
    <?php
      $hex = array("A", "B", "C", "D", "E", "F", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
      $colour1 = array();
      $colour2 = array();

      echo "<div class='colour' style='background: linear-gradient(#";

      for($i = 0; $i < 6; $i++){
        $j = array_rand($hex);
        $k = $hex[$j];
        array_push($colour1, $k);
        echo($k);
      };

      echo ", #";

      for($l = 0; $l < 6; $l++){
        $m = array_rand($hex);
        $n = $hex[$m];
        array_push($colour2, $n);
        echo($n);
      };

      echo");'>";
      
        echo "<div class='card'>";
          echo "<span>Gradient Generator</span>";
          echo "<div class='text'>#";
          foreach($colour1 as $key => $val){
            echo $val;
          }
          echo", #";
          foreach($colour2 as $key => $val){
          echo $val;
          }
          echo "</div>";
    ?>
          <div class='buttons'>
            <input type='button' onClick='window.location.reload()' value='Generate'/>
            <input type='button' id='copy' value='Copy'/>
          </div>
        </div>
      </div>
    <?php
      echo "<input type='text' style='background: none; color: transparent; border:none;' id='text' value='linear-gradient(#";
      foreach($colour1 as $key => $val){
        echo $val;
      }
      echo", #";
      foreach($colour2 as $key => $val){
        echo $val;
      }
      echo ")'/>";
    ?>
    <script src="js/copy.js"></script>
  </body>
</html>