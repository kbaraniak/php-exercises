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

if(isset($_POST["id"])){
    $miesiac = $_POST["id"];

    switch($miesiac){
        case 1:
            echo "Styczeń";
            break;
        case 2:
            echo "Luty";
            break;
        case 3:
            echo "Marzec";
            break;
        case 4:
            echo "Kwiecień";
            break;
        case 5:
            echo "Maj";
            break;
        case 6:
            echo "Czerwiec";
            break;
        case 7:
            echo "Lipiec";
            break;
        case 8:
            echo "Sierpień";
            break;
        case 9:
            echo "Wrzesień";
            break;
        case 10:
            echo "Październik";
            break;
        case 11:
            echo "Listopad";
            break;
        case 12:
            echo "Grudzień";
            break;
        default:
            echo "<b style='color: red'>Podałeś zły miesiąc</b>. Podaj miesiąc od (1-12)";
    }
}
?>