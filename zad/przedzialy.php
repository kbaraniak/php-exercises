<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przedziały</title>
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

// Punkt 1
echo "<h3>Punkt 1</h3>";

$suma1 = 0;
for ($i=1; $i < 11; $i++) { 
    echo $i;
    $suma1 += $i;
}
echo "<br>";
echo $suma1;

// Punkt 2
echo "<h3>Punkt 2</h3>";

$suma2 = 0;
$a = 10;
while ($a >= 1) {
    echo $a;
    $suma2 += $a;
    $a--;
}
echo "<br>";
echo $suma2;

// Punkt 3
echo "<h3>Punkt 3</h3>";

$suma3 = 0;
$b = 10;
do {
    echo $b;
    $suma3 += $b;
    $b++;
} while ($b <= 20);
echo "<br>";
echo $suma3;

?>