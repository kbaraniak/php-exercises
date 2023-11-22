<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potęgowanie</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap');
        *{
            font-family: Roboto;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php

if(isset($_POST["a"]) and isset($_POST["b"])){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = 0;
    $suma = 0;
    if($a > $b){
        $c = $a;
        $b = $c;
    }

    for ($i=$a; $i <= $b; $i++) { 
        $suma += $i;
    }
    echo $suma;
}

?>