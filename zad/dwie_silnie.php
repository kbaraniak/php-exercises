<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podwójna Silnia</title>
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
    if(isset($_POST["liczba"])){
        $liczba = $_POST["liczba"];

        function podwojna_silnia($liczba) {
            if ($liczba < 2) {
                return 1;
            }
            $wynik = 1;
            for ($i = 2; $i <= $liczba; $i += 2) {
                $wynik *= $i;
            }
            return $wynik;
        }
        
        $wynik = podwojna_silnia($liczba);
        
        echo "Wynik: $wynik";
    }


?>