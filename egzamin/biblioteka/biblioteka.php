


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
    </div>
    <section class="lewy">
        <h2>Dodaj czytelnika</h2>
        <form method="post">
            imie: <input type="text" name="imie" id="imie"><br>
            nazwisko: <input type="text" name="nazwisko" id="nazwisko"><br>
            rok urodzenia: <input type="number" name="rok_urodzenia" id="rok_urodzenia">
            <br><input type="submit" value="Dodaj">
        </form>
        <?php
            $conn = mysqli_connect("127.0.0.1", "root", "", "biblioteka");
            if( !$db = $conn ) {
                die('No connection: ' . mysqli_connect_error());
            }
            if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['rok_urodzenia'])){
                $name = $_POST['imie'];
                $surname = $_POST['nazwisko'];
                $year = $_POST['rok_urodzenia'];

                $name_key = substr($name, 0, 2);
                $year_key = substr($year, -2);
                $surname_key = substr($surname, 0, 2);
                $key = strtolower($name_key . $year_key . $surname_key);
                
                echo "Czytelnik: $name został dodany do bazy danych";
                $query = "INSERT INTO `czytelnicy` (imie, nazwisko, kod) VALUES ('$name', '$surname', '$key');";
                mysqli_query($conn, $query);
            }
        ?>
    </section>
    <section class="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h4>ul. Czytelnicza 25<br>
            12-120 Książkowice <br>
            tel: 123123123 <br>
            e-mail <a href="mailto:biuro@bip.pl">biuro@bip.pl</a><br>
        </h4>
    </section>
    <section class="prawy">
        <h3>Nasi czytelniczy:</h3>
        <ul>
            <?php
                $query2 = "SELECT imie, nazwisko FROM `czytelnicy`";
                $sql = mysqli_query($conn,$query2);
                while ($row = mysqli_fetch_row($sql)){
                    echo "<li>" . $row[0] . " " . $row[1] . "</li>";
                }
                mysqli_close($conn);
            ?>
        </ul>

    </section>
    <div class="stopka">
        <p>Projekt witryny: &copy; XYZ</p>
    </div>
</body>
</html>