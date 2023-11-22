<?php
if (isset($_POST["ax"]) && isset($_POST["bx"]) && isset($_POST["c"])) {
    $ax = $_POST["ax"];
    $bx = $_POST["bx"];
    $c = $_POST["c"];

    // Sprawdzamy, czy a jest równe 0
    if ($ax == 0) {
        echo "Funkcja liniowa - nie można obliczyć delty";
    } else {
        // Obliczamy deltę (pow - potęgowanie)
        $delta = pow($bx, 2) - 4 * $ax * $c;
        echo "Delta wynosi: <b>" . $delta . "</b></br>";

        if ($delta >= 0) {
            // Jeśli funkcja ma dwa miejsca zerowe
            $x1 = (-$bx + sqrt($delta)) / (2 * $ax);
            $x2 = (-$bx - sqrt($delta)) / (2 * $ax);
            echo "Rozwiązania kwadratowej równania to: <b>x1 = $x1</b> i <b>x2 = $x2</b>";
        } else {
            // Funkcja nie ma miejsc zerowych
            echo "Równanie nie ma rozwiązań";
        }
    }

} else {
    echo "Invalid Form";
}

?>