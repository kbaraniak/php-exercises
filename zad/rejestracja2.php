<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja nowego użytkownika</title>
    <style>input{margin-top: 2px;margin-bottom:3px;}a{color: black;text-decoration: none;}</style>
</head>
<body>
    <h2>Rejestracja do usługi Premium</h2>
    <form method="post">
        <input type="text" name="login" id="login" placeholder="Login"><br>
        <input type="password" name="password" id="password" placeholder="Haslo"><br>
        <input type="password" name="repeat_password" id="repeat_password" placeholder="Powtorz Haslo"><br>
        <input type="checkbox" name="regulamin" id="regulamin" required>
        <label for="regulamin"><b>Akceptuje regulamin serwisu oraz pośredników w tym <a href="https://www.facebook.com/legal/terms_preview_DSA">Facebooka</a></b></label><br>
        <input type="submit" value="Rejestruj">
    </form>
</body>
</html>



<?php

function validPass($haslo) {
    return (strlen($haslo) >= 7) && (bool) preg_match('/[A-Z]/', $haslo) && (bool) preg_match('/[a-z]/', $haslo) && (bool) preg_match('/[0-9]/', $haslo);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = $_POST["login"];
    $pass = $_POST["password"];
    $repeat_pass = $_POST["repeat_password"];

    if($pass == $repeat_pass){
        if(!validPass($pass)){
            echo "Hasło jest słabe, popraw ze względów bezpieczeństwa<br>";
        }

        $flogin = fopen("../login.txt", "a") or die("Problem z otwarciem pliku <b>'login.txt'</b> z możliwością zapisu<br>");
        $fpass = fopen("../haslo.txt", "a") or die("Problem z otwarciem pliku <b>'haslo.txt'</b> z możliwością zapisu<br>");

        $fwrite_login = fwrite($flogin, "$login\n");
        $fwrite_pass = fwrite($fpass, "$pass\n");

        if($fwrite_login && $fwrite_pass){
            echo "Login i hasło pomyślnie zapisano do plików";
        } else if($fwrite_login){
            echo "Problem z zapisaniem hasła do pliku <b>haslo.txt</b>";
        } else if($fwrite_pass){
            echo "Problem z zapisaniem loginu do pliku <b>login.txt</b>";
        }

        fclose($flogin);
        fclose($fpass);
    }
    else{
        echo "Hasła są niepoprawne";
    }
}
?>