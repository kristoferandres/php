

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
  $name = "mARiO";
  $name = ucfirst(strtolower($name));
  echo "Tere, " . $name . "!";
  echo"<br>";
  $word = "stalker";
  $word = strtoupper($word);
  $word = str_split($word);
  $result = "";
  foreach($word as $char){
    $result .= $char . ".";
  }
  echo $result;
  echo"<br>";
  $message = "Sa oled täielik sittakott";
  $badWords = array("noob", "sitt");
  $replace = "***";
  $message = str_replace($badWords, $replace, $message);
  echo $message;
echo"<br>";
  $firstName = "Ülle";
  $lastName = "Doos";
  $firstName = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), strtolower($firstName));
  $lastName = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), strtolower($lastName));
  echo $firstName . "." . $lastName . "@hkhk.edu.ee";
?>

</div>

</body>
</html>

