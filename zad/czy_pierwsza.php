<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liczba pierwsza</title>
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
    if(isset($_POST["nr"])){
        $liczba = $_POST["nr"];
        $dzielnik = 1;
        function czyLiczbajestPierwsza($n){
            for($x=2; $x<$n; $x++){
                if($n % $x == 0)
                    {
                    return 0;
                    }
                }
            return 1;
        }
        $wynik = czyLiczbajestPierwsza($liczba);
        if($wynik){
            echo "Liczba <b>$liczba</b> jest liczbą pierwszą";
        }
        else{
            echo "Liczba <b>$liczba</b> jest nie jest liczbą pierwszą";
        }
    }

// podzielic przez 1, jesli tak wyswietlamy dzielnik
?>


