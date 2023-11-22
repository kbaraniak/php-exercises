<?php
    $img = "";
    $imgobject = "Nie wybrano ścieżki zdjęcia";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $img = "img/" . $_POST["opcja"] . ".jpg";
        $imgobject = "<img src='$img'></img>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podgląd zdjęcia</title>
    <style>img{margin-left:auto;margin-right:auto;display: block;filter: drop-shadow(1px 1px 22px black);}body{background-image: url('<?php echo $img;?>');background-position: center;background-attachment: fixed; background-repeat: no-repeat;background-size: cover;}</style>
</head>
<body>
    <?php echo $imgobject;?>
</body>
</html>

