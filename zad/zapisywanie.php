<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $dir = dirname(getcwd());
        if(isset($_POST["pokaz"])){
            echo "<h4>Wyświetlanie danych z $dir\dane.txt</h4>";
            $file = fopen("../dane.txt", "r") or die("Plik nie istnieje");
            while(!feof($file)) {
                echo fgets($file) . "<br>";
            }
        }
        else{
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $wiek = $_POST["wiek"];
            $date = date("Y/m/d - H:m");
            $file = fopen("../dane.txt", "a") or die("Problem z otwarciem pliku z możliwością zapisu");
            $data = "\n[$date]\nImie: $imie\nNazwisko: $nazwisko\nWiek: $wiek\n";
            $fwrite = fwrite($file, $data);
            if ($fwrite) {
                echo "Formularz został zapisany do pliku <b>$dir\dane.txt</b>";
                system("notepad $dir\dane.txt");
            }
            else{
                echo "Problem z zapisaniem pliku: <b>$dir\dane.txt</b>";
            }
            fclose($file);
        }

    }
?>