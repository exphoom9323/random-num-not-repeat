<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$n = 0;
    for($i = 0; $i <= 6 ; $i++){
        for($j = 0;$j <= 21; $j++){
            $nA = 11 - $n;
            $nB = 11 + $n;
            if($j <= $nA && $j >= $nB) {
                echo "*";
            } else {
                echo "+";
            }
        }
    }
?>
</body>
</html>