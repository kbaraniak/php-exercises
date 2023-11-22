<?php

if(isset($_POST["form"])){
    $liczba = (int) $_POST['liczba'];
    if(isset($_POST["bin"])){
        $rodzaj = 2;
    }
    else if(isset($_POST["hex"])){
        $rodzaj = 16;
    }
    
    if ($liczba >= 0 && ($rodzaj == 2 || $rodzaj == 16)) {
        if ($rodzaj == 2) {
            $wynik = decbin($liczba);
        } else if ($rodzaj == 16) {
            $wynik = dechex($liczba);
        }
    
        echo "Liczba {$rodzaj} to: {$wynik}";
    } else {
        echo "Błąd: Dane wejściowe są nieprawidłowe.";
    }
}

?>