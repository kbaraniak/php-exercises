<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Większa liczba</title>
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

if(isset($_POST["nr1"]) and isset($_POST["nr2"])){
    $nr1 = $_POST["nr1"];
    $nr2 = $_POST["nr2"];
    if($nr1 > $nr2){
        echo "Większa liczba to: <b> " . $nr1 . " ({$nr1} > {$nr2}) </b><br>";
    }
    else if($nr1 < $nr2){
        echo "Większa liczba to: <b> " . $nr2 . " ({$nr1} < {$nr2}) </b><br>";
    }
    else{
        echo "Liczby są równe <b>({$nr1} == {$nr2})</b>";
    }
}

?>