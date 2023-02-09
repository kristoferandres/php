<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus2</title>
</head>
<body>
    <form action="#" method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">trapetsi esimene kulg</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "t1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">trapetsi  teine kulg</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">trapetsi kõrgus</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">rombi kulg</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "t4">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if (isset($_GET['t1'])&&isset($_GET['t2'])&&isset($_GET['t3'])&&isset($_GET['t4'])){
      $to1 = $_GET['t1'];
      $to2 = $_GET['t2'];
      $to3 = $_GET['t3'];
      $to4 = $_GET['t4'];

      $v1 = (($to1+$to2)/2)*$to3;
      $v2 = $to4 *4;
      echo 'tapets:'.$v1.'romb: '.$v2;
}
    ?>

</body>
</html>