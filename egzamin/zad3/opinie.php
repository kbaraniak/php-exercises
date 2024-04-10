<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "hurtownia");

class Database {
    public function skrypt1() {
        global $conn;
        $query1 = "SELECT zdjecie, imie, opinia FROM `klienci` INNER JOIN `opinie` ON klienci.id = opinie.klienci_id WHERE klienci.Typy_id = 2 OR klienci.Typy_id = 3;";
        $sql1 = mysqli_query($conn, $query1);
        while ($array1 = mysqli_fetch_assoc($sql1)) {
            echo '<div class="blok">';
            echo '<img class="obraz" src="' . $array1["zdjecie"]. '" alt="klient">';
            echo '<div class="blok2"> <p class="cytat">' . $array1['opinia'] . '</p>';
            echo '<h4>' . $array1['imie'] . '</h4>';
            echo '</div></div>';
        }

    }

    public function skrypt2() {
        global $conn;
        $query2 = "SELECT imie, nazwisko, punkty FROM `klienci` ORDER BY punkty DESC LIMIT 3";
        $sql2 = mysqli_query($conn, $query2);
        while ($array2 = mysqli_fetch_assoc($sql2)) {
            $output = $array2['imie'] . ' ' . $array2['nazwisko'] . ', ' . $array2['punkty'] . ' pkt.<br>';
            echo "<li>" . $output . "</li>";
        }
        mysqli_close($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h3>Oceńmy naszych klientów</h3>
        <?php $db = new Database();?><?php $db->skrypt1(); ?>
    </main>
    <footer>
        <div>
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </div>
        <div>
            <h3>Nasi top klienci</h3>
            <ol>
                <?php $db = new Database();?><?php $db->skrypt2(); ?>
            </ol>
        </div>
        <div>
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </div>
        <div>
            <h3>Autor: XYZ</h3>
        </div>
    </footer>
</body>
</html>
