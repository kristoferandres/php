

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

<form>
    <p>algaeg</p>
<input type="time" name="start" class="form-control" aria-describedby="passwordHelpInline" require>
<p>loppaeg</p>
<input type="time" name="end" class="form-control" aria-describedby="passwordHelpInline" require>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
function calc_driving_time($start, $end) {
    if (strlen($start) < 5 || strlen($end) < 5) {
      return "Vigane sisend!";
    }
    
    $start_time = strtotime($start);
    $end_time = strtotime($end);
    $diff = $end_time - $start_time;
    
    $hours = floor($diff / 3600);
    $minutes = floor(($diff % 3600) / 60);
    
    return sprintf("%02d:%02d", $hours, $minutes);
  }
  

  

  if(isset($_GET['start']) && isset($_GET['end'])){
    $start = $_GET['start'];
    $end = $_GET['end'];
    echo calc_driving_time($start, $end);
  echo "<br><br>";
  }
  



$file = fopen("tootajad.csv","r");

$narray=array();
$marray=array();
$mk=0;
$nk=0;


while(! feof($file))
  {
    $data = fgetcsv($file);
    if ($data !== FALSE) {
      foreach ($data as $value) {
        $values = explode(";", $value);
        list($name, $gender, $age) = $values;
        if ($gender == "m") {
            array_push($marray, $age);
            if ($mk < $age){
                $mk = $age;
            }
        } else {
            array_push($narray, $age);
            if ($nk < $age){
                $nk = $age;
            }


        }


        
      }
    
  }
  }
fclose($file);
$mkes= array_sum($marray) / count($marray);
$nkes= array_sum($narray) / count($narray);
echo "meespalk: ".$mk."<br>";
echo "naispalk: ".$nk."<br>";
echo "meespalk kesk: ".$mkes."<br>";
echo "naispalk kesk: ".$nkes."<br>";

?>

</div>

</body>
</html>

