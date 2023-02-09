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


 function tervita(){
 return "Tere päiksekene"; 
 }


function vorm(){
    return '<form> <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Bootstrap uudiskiri</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> </div>  <button type="submit" class="btn btn-primary">tahan</button> </form>';
 }

 function create($username) {
    $usernameLower = strtolower($username);
    $email = $usernameLower . "@hkhk.edu.ee";
    $code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 7);
    $val = "Username: " . $usernameLower . "<br>". "Email: " . $email . "<br>". "Code: " . $code . "<br>";
    return $val;
  }

  function generateNumbers($start, $end, $step = 1) {
    $numbers = array();
    for ($i = $start; $i <= $end; $i += $step) {
      $numbers[] = $i;
    }
    return $numbers;
  }

  function ruut($start, $end) {
    $vastus = $start * $end;
    return $vastus;
  }
  function isik($personalCode) {
    $result = array(
      'valid' => "ei ole õige",
      'gender' => '',
      'birthdate' => '',
    );
  
    if (strlen($personalCode) != 11) {
      return $result;
    }
  
    $result['valid'] = "on õige";
    $genderNumber = (int) substr($personalCode, 0, 1);
    $result['gender'] = ($genderNumber % 2 == 0) ? 'Female' : 'Male';
  
    $birthdate = substr($personalCode, 1, 6);
    $result['birthdate'] = substr($birthdate, 4, 2) . '.' . substr($birthdate, 2, 2) . '.' . '20' . substr($birthdate, 0, 2);
  
    return $result;
  }

  function lause() {
    $subjects = array("Minä", "Sina", "Ta", "Tema", "See", "Meie", "Nemad");
    $verbs = array("jooksevad", "hüppavad", "lendavad", "ujuvad", "tantsivad", "laulavad", "mängivad");
    $objects = array("palli", "muusikat", "taevast", "vett", "päikest", "tähti", "kuud");
  
    $subject = $subjects[array_rand($subjects)];
    $verb = $verbs[array_rand($verbs)];
    $object = $objects[array_rand($objects)];
  
    return "$subject $verb $object.";
  }



 /* foreach (isik(505032302) as $nr){
    echo $nr."<br>";
  } */
  echo lause();

?>
</div>

</body>
</html>

