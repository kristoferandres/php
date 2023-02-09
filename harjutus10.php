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
$validPages = array('homenot', 'harjutus1', 'harjutus2', 'harjutus3', 'harjutus4', 'harjutus5', 'harjutus6', 'harjutus7', 'harjutus8', 'harjutus9', 'harjutus11', 'harjutus13', 'harjutus14');
$page = "homenot";
if(isset($_GET['page'])) {
  $page = $_GET['page'];
} else {}
if(in_array($page, $validPages)) {
  if(file_exists($page.'.php')) {
    echo '<a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus1">1</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus2">2</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus3">3</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus4">4</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus5">5</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus6">6</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus7">7</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus8">8</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus9">9</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus11">11</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus13">13</a>
    <a href="http://localhost/harjutusedkaust/harjutus10.php?page=harjutus14">14</a>';
    include($page.'.php');
  } else {
    echo 'Lehte ei leitud!';
  }
} else {
  echo 'Invalid page requested!';
}


?>
</div>

</body>
</html>





