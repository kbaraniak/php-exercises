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
    function potegowanie($a, $b){
        $wynik = 1;
        for ($i=0; $i < $b; $i++) { 
            $wynik *= $a;
        }
        return $wynik;
    }
    if(isset($_POST["podstawa"]) and isset($_POST["wykladnik"])){
        $podstawa = $_POST["podstawa"];
        $wykladnik = $_POST["wykladnik"];

        echo potegowanie($podstawa, $wykladnik);
    }
?>