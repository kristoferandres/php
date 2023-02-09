<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row">
    <?php
    $dir = "uploads/";
    $images = scandir($dir);
    unset($images[0], $images[1]);
    
    for ($i = 0; $i < 6; $i++) {
        $randomImage = $dir . $images[array_rand($images)];
      echo '<div class="col-sm-4">
              <a href="' . $randomImage . '">
                <img src="' . $randomImage . '" class="img-thumbnail">
              </a>
            </div>';
    }
    ?>
  </div>






 
  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>