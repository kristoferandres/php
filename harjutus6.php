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
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 10 == 0){echo "<br>";}
    echo $i.".";
}
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 10 == 0){echo "<br>";}
    echo "*";
}
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "*<br>";
}
?>
<form action="#" method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">arv1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "t1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">arv2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t2"required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php
if (isset($_GET['t1'])&&isset($_GET['t2'])){
    $to1 = $_GET['t1'];
    $to2 = $_GET['t2'];
    for ($s = 1; $s <= $to2; $s++) {
        
        for ($i = 1; $i <=$to1 ; $i++) {
            echo "* ";
        }
        echo "<br>";
    }
    
    
}
for ($i = 10; $i >= 1; $i--) {
    if ($i % 2 == 0) {
      echo $i . " ";
    }
  }
  echo "<br>";
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
      echo $i . " ";
    }
  }
  echo "<br>";

  $boys = array("John", "David", "Mark", "James", "Daniel");
$girls = array("Emily", "Jessica", "Sarah", "Ava", "Olivia");

for ($i = 0; $i < count($boys); $i++) {
  echo $boys[$i] . " - " . $girls[$i] . "<br>";
}
?>


</body>
</html>

