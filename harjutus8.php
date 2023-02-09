<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<div class="container">
<?php


$datetime = new DateTime();
echo $datetime->format("d.m.Y H:i");

echo "<br>";
echo '<form action="" method="post">
<div class="form-group">
    <label for="birthdate">Sünnikuupäev:</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate">
</div>
<button type="submit" class="btn btn-primary">Arvuta vanus</button>
</form>';
if (isset($_POST['birthdate'])) {
    $birthdate = new DateTime($_POST['birthdate']);
    $today = new DateTime();
    $age = $birthdate->diff($today)->y;
    
    echo "<p>Te olete $age aastat vana.</p>";
}
?>
<?php
  date_default_timezone_set('UTC');
  $month = date('n', time());
  switch ($month) {
    case 3:
      $season = 'spring';
      break;
    case 4:
      $season = 'spring';
      break;
    case 5:
      $season = 'spring';
      break;
    case 6:
      $season = 'summer';
      break;
    case 7:
      $season = 'summer';
      break;
    case 8:
      $season = 'summer';
      break;
    case 9:
      $season = 'autumn';
      break;
    case 10:
      $season = 'autumn';
      break;
    case 11:
      $season = 'autumn';
      break;
    default:
      $season = 'winter';
      break;
  }
?>

<div class="text-center">
  <?php if ($season === 'spring'): ?>
    <img src="Spring.jpg" alt="Spring">
  <?php elseif ($season === 'summer'): ?>
    <img src="Summer.jpg" alt="Summer">
  <?php elseif ($season === 'autumn'): ?>
    <img src="Autumn.jpg" alt="Autumn">
  <?php else: ?>
    <img src="Winter.jpg" alt="Winter">
  <?php endif; ?>
  <p><?= ucfirst($season); ?></p>
</div>
<?php

$end_date = strtotime("2023-06-01");
$today = time();
$difference = $end_date - $today;
$days_left = floor($difference / 86400);

echo "2023 kooliaasta lõpuni on jäänud " . $days_left . " päeva.";

?>


</div>

</body>
</html>

