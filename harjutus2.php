<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus2</title>
</head>
<body>
    <?php
        $e = 10;
        $t = 5;
        $ev = $e + $t;
        $tv = $e - $t;
        $kv = $e * $t;
        $nv = $e / $t;
        $nv = $e % $t;
        echo $e,'+',$t, '=', $ev, '<br>'; 
        echo $e,'-',$t, '=', $tv, '<br>'; 
        echo $e,'*',$t, '=', $kv, '<br>'; 
        echo $e,'/',$t, '=', $nv, '<br>'; 
        echo $e,'%',$t, '=', $nv, '<br><br>';

        $mm = 2100;
        $mmm = floor($mm / 1000);
        $mmcm = ($mm % 1000)/100;
        echo $mm, ' mm = ', $mmm, ' m ', $mmcm, ' cm<br><br>';

        $kulg = 7;
        $u = round($kulg *3);
        $p = round($kulg * ($kulg/2));
        echo 'Külg = ', $kulg, '<br>Ümbermõõt = ', $u, '<br>Pindala = ', $p;


    ?>
</body>
</html>