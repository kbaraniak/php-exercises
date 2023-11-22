<?php

function validPassword($haslo) {
    return (strlen($haslo) >= 7) && (bool) preg_match('/[A-Z]/', $haslo) && (bool) preg_match('/[a-z]/', $haslo) && (bool) preg_match('/[0-9]/', $haslo);
}


if(isset($_POST["form"])){
    $formLogin = $_POST["login"];
    $formPass = $_POST["haslo"];
    $loginFile = fopen("../login.txt", "r");
    $passFile = fopen("../haslo.txt", "r");
    $loginList = fread($loginFile, filesize("../login.txt"));
    $passList = fread($passFile, filesize("../haslo.txt"));
    $loginArray  = explode("\n", $loginList);
    $passArray = explode("\n", $passList);

    $i=0;
    foreach ($loginArray as $login){
        if($login == $formLogin){
            $pass = $passArray[$i];
            if($pass = $formPass){
                echo "Witaj $login";
            }else{
                echo "Nieprawidłowy login lub hasło";
            }
        }
        $i++;
    }
}

?>