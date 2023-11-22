<?php

function generateImage($numbers, $outputFile) {
    // Create a blank image with a width and height of 200 pixels
    $image = imagecreatetruecolor(200, 200);
    
    // Set the background color to white
    $backgroundColor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $backgroundColor);
    
    // Set the text color to black
    $textColor = imagecolorallocate($image, 0, 0, 0);
    
    // Set the font size
    $fontSize = 20;
    
    // Set the initial position for drawing the numbers
    $x = 10;
    $y = 30;
    
    // Loop through the numbers and draw them on the image
    foreach ($numbers as $number) {
        imagestring($image, $fontSize, $x, $y, $number, $textColor);
        $y += 30; // Move down to the next line
    }
    
    // Save the image to a file
    imagepng($image, $outputFile);
    
    // Free up memory
    imagedestroy($image);
}

$numbers = ["1"];
$outputFile = 'zdjecie.png';
generateImage($numbers, $outputFile);



?>