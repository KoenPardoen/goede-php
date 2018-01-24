
<?php
date_default_timezone_set("Europe/Amsterdam");
$t = date("H");

if ($t < "12") {
    $text = "Goedemorgen!";
    $background = "morning";
} elseif ($t < "18") {
    $text = "Goedemiddag!";
    $background = "afternoon";
} elseif ($t < "24") {
    $text = "Goedenavond!";
    $background = "evening";
} else {
    $text = "Goedenacht!";
    $background = "night";
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
    <div class="center">
      <span id="txt"><?php echo $text; ?></span><br>
      <span id="time"><?php echo "Het is nu " . date("H:i"); ?></span>
    </div>

  </body>
</html>
