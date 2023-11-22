<?php

function checkPalindrome($string){  
    if (strrev($string) == $string){  
        return 1;  
    } else{
        return 0;
    }
}  


if(isset($_POST["form"])){
    $word = $_POST["word"];
    if(checkPalindrome($word)){
        $msgArg = "jest";
    }
    else{
        $msgArg = "<span style='color: red'>nie jest</span>";
    }
    echo "Słowo <b>$msgArg<b> palindromem";
}

?>
