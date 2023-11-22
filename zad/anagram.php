<?php
// Inne rozwiązanie - Algorytm bąbelkowy
if(isset($_POST["form"])){
    $word1 = $_POST["slowo1"];
    $word2 = $_POST["slowo2"];

    if(strlen($word1) == strlen($word2) && count_chars($word1, 3) == count_chars($word2, 3)){
        echo "<p style='color: green;'>Słowo jest anagramem</p>";
    }
    else{
        echo "<p style='color: red;'>Słowo nie jest anagramem</p>";
    }
}
?>