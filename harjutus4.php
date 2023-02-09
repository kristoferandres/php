<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus2</title>
</head>
<script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
<body>
    <form action="#" method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">arv1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "t1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">arv2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t2"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">vanus1</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t3"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">vanus2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t4"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">kulg1</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t5"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">kulg2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t6"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">sunniaasta</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t7"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">KT punktid</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t8"required>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if (isset($_GET['t1'])&&isset($_GET['t2'])&&isset($_GET['t3'])&&isset($_GET['t4'])&&isset($_GET['t5'])&&isset($_GET['t6'])&&isset($_GET['t7'])&&isset($_GET['t8'])){
      $to1 = $_GET['t1'];
      $to2 = $_GET['t2'];
      $to3 = $_GET['t3'];
      $to4 = $_GET['t4'];
      $to5 = $_GET['t5'];
      $to6 = $_GET['t6'];
      $to7 = $_GET['t7'];
      $to8 = $_GET['t8'];

      if ($to2 != 0) {
      $v1 = $to1 / $to2;
      echo "jagamistehtevastus: ", $v1, "<br>";
    } else {echo "u dumass not 0 to arv2<br>";}

      if ($to3 == $to4){
        $v2 = "te olete samavanad<br>";
      } elseif ($to3 > $to4){
        $v2 = "esimene vanem<br>";
      }else{$v2 = "teine vanem<br>";}
      echo $v2;

      if ($to5 != $to6){
        $v3 = "ruut<br>";
        echo " ____ <br>";
        echo "|&nbsp; &nbsp; &nbsp; &nbsp;|<br>";
        echo "|____|<br>";
      } else {$v3 = "ristkülik<br>";
        echo " ____ <br>";
        echo "|&nbsp; &nbsp; &nbsp; &nbsp;|<br>";
        echo "|&nbsp; &nbsp; &nbsp; &nbsp;|<br>";
        echo "|____|<br>";
      }
      echo $v3;
      $year = date("Y"); 
      if (($year-$to7) % 5 == 0){
        echo "juubel<br>";
      } else {
        echo "ei<br>";
      }

      switch ($to8) {
        case $to8>9:
          echo "SUPER<br>";
          break;
        case $to8<10 && $to8>4:
          echo "TEHTUD<br>";
          break;
        case $to8<5:
          echo "KASIN<br>";
          break;
        default:
          echo "SISESTA OMA PUNKTID<br>";
      }

        }

    ?>

</body>
</html>