<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik obliczenia</title>
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

if(isset($_GET["nr1"]) and isset($_GET["nr2"])){
    $nr1 = $_GET["nr1"];
    $nr2 = $_GET["nr2"];
    if($nr1 > 10 and $nr2 > 10){
        $wynik_iloraz = $nr1/$nr2;
        echo "<b>Iloraz Wynosi</b>: " . $wynik_iloraz . "<br>";
    }
    else if($nr1 < 10 and $nr2 > 10){
        $wynik_roznica = $nr1 - $nr2;
        echo "<b>Różnica Wynosi</b>: " . $wynik_roznica . "<br>";
    }
    else if ($nr1 < 10 or $nr2 < 10) {
        $wynik_iloczyn = $nr1 * $nr2;
        echo "<b>Iloczyn Wynosi</b>: " . $wynik_iloczyn . "<br>";
    }
    else{
        $wynik_suma = $nr1 + $nr2;
        echo "<b>Suma Wynosi</b>: " . $wynik_suma . "<br>";
    }
}

?>