<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imiona</title>
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

if(isset($_POST["imiona"])){
    $nr = 1;
    $wszystkie_imiona = explode(', ', $_POST["imiona"]);
    echo "Podane Imiona to:<br>";
    foreach ($wszystkie_imiona as $imie) {
        echo "$nr.<b>" . $imie . "</b><br>";
        $nr++;
    }
    echo "Podane drugie imie to: <u>$wszystkie_imiona[1]</u>";
    $exportImiona = json_encode($wszystkie_imiona);
    ?>
    <form method="post">
        <br>
        <input type="text" value='<?php echo $exportImiona;?>' name="update" id="update" hidden>
        Podaj nowe imie: <input type="text" name="nowe_imie" id="nowe_imie"><br>
        <input type="submit" value="Potwierdź zmianę">
    </form>
<?php
}
if(isset($_POST["nowe_imie"])){
    $nr = 1;
    echo "Zmieniono liste imion:<br>";
    $wszystkie_imiona = json_decode($_POST["update"]);
    $wszystkie_imiona[1] = $_POST["nowe_imie"];
    // var_dump($_POST["update"]);
    foreach ($wszystkie_imiona as $imie) {
        echo "$nr.<b>" . $imie . "</b><br>";
        $nr++;
    }
    echo "Zmienione imie to : <u>$wszystkie_imiona[1]</u>";
    
}
?>