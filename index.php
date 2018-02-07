<?php
date_default_timezone_set("Europe/Amsterdam");
$t = date("H");

if ($t < "12") {
    $text = "Goedemorgen!";
    $background = "morning";
    $gif = "img/pajaro.gif";
} elseif ($t < "18") {
    $text = "Goedemiddag!";
    $background = "afternoon";
    $gif = "img/pajaro.gif";
} elseif ($t < "24") {
    $text = "Goedenavond!";
    $background = "evening";
    $gif = "img/pajaro.gif";
} else {
    $text = "Goedenacht!";
    $background = "night";
    $gif = "img/ufo.gif";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Live time</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="Javascript/script.js" charset="utf-8"></script>
  </head>
  <body id="<?php echo $background; ?>" onload="startTime()">
    <img class="piopio" id="pajaro" src="<?php echo $gif; ?>" alt="">
    <div class="center">
      <span id="txt"><?php echo $text; ?></span><br>
      <span id="time"></span>
    </div>

  </body>
</html>

    <!-- <img class="piopio" id="pajaro" src="img/pajaro.gif" alt="vogel"> -->
