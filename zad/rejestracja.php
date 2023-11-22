<?php
if(isset($_POST["imie"]) and isset($_POST["nazwisko"])){
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    if(strlen($imie) > 2 and strlen($nazwisko) > 4){
        $imie = ucfirst($imie);
        $nazwisko = ucfirst($nazwisko);
        $login = $imie[0] . $nazwisko . rand(10,99);
        echo "Witaj <b>" . ucfirst($imie) . " " . ucfirst($nazwisko) . "</b></br>" ;
        echo "Twój login: <b>" . $login . "</b>";
    }
    else{
        echo "Empty Form";
    }
}
else{
    echo "Invalid Form";
}

// kasia nowak
// knowak32]
// var(1,2,3,....)
//
?>



