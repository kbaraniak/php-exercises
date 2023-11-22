<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania - Obliczenia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap');
        *{
            font-family: Roboto;
        }
        button{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Zad 1 - Proste obliczenia</h1>
    <form action="zad/oblicz.php" method="get">
        Podaj pierwszą liczbę: <input type="number" name="nr1" id="nr1"><br>
        Podaj drugą liczbę: <input type="number" name="nr2" id="nr2"><br>
        <button type="submit">Oblicz</button>
    </form>
    <h1>Zad 2 - Czy liczba jest większa</h1>
    <form action="zad/wieksza.php" method="post">
        Podaj pierwszą liczbę: <input type="number" name="nr1" id="nr1"><br>
        Podaj drugą liczbę: <input type="number" name="nr2" id="nr2"><br>
        <button type="submit">Sprawdź równość</button>
    </form>
    <h1>Zad 3 - Sprawdzanie Miesiąca</h1>
    <form action="zad/miesiac.php" method="post">
        Podaj numer miesiąca (1-12): <input type="number" min="1" max="12" name="id" id="id"><br>
        <button type="submit">Pokaż</button>
    </form>
    <h1>Zad 4 - Przedziały</h1>
    <form action="zad/przedzialy.php" method="post">
        <button type="submit">Suma Wartości</button>
    </form>
    <h1>Zad 5 - Liczba pierwsza</h1>
    <form action="zad/czy_pierwsza.php" method="post">
        Podaj liczbe: <input type="number" name="nr" id="nr"><br>
        <button type="submit">Sprawdź</button>
    </form>
    <h1>Zad 6 - Potęgowanie</h1>
    <form action="zad/potegowanie.php" method="post">
        Podaj podstawa: <input type="number" name="podstawa" id="podstawa"><br>
        Podaj wykladnik: <input type="number" name="wykladnik" id="wykladnik"><br>
        <button type="submit">Sprawdź</button>
    </form>
    <h1>Zad 7 - Dwie Silnie</h1>
    <form action="zad/dwie_silnie.php" method="post">
        Podaj liczbe: <input type="number" name="liczba" id="liczba"><br>
        <button type="submit">Sprawdź</button>
    </form>
    <h1>Zad 8 - Przedziały 2</h1>
    <form action="zad/przedzialy2.php" method="post">
        Podaj a: <input type="number" name="a" id="a"><br>
        Podaj b: <input type="number" name="b" id="b"><br>
        <button type="submit">Sprawdź</button>
    </form>
    <h1>Zad 9 - Edytor Imion</h1>
    <form action="zad/imiona.php" method="post">
        Podaj imie <input type="text" name="imiona" id="imiona"><br>
        <button type="submit">Sprawdź</button>
    </form>
    <h1>Zad 10 - Prosty Formularz</h1>
    <form action="zad/formularz.php" method="post">
        Imię: <input type="text" name="imie" id="imie"><br>
        Nazwisko: <input type="text" name="nazwisko" id="nazwisko"><br>
        Klasa: <select name="klasa" id="klasa">    
            <option value="1">pierwsza</option>
            <option value="2">druga</option>
            <option value="3">trzecia</option>
            <option value="4">czwarta</option>
        </select><br>
        <button type="submit">Wyślij</button>
        <input type="reset" value="Czyść">
    </form>    
    <h1>Zad 11 - Obliczanie Delty</h1>
    <form action="zad/delta.php" method="post">
        ax&sup2;: <input type="number" name="ax" id="ax"><br>
        bx: <input type="number" name="bx" id="bx"><br>  
        c: <input type="number" name="c" id="c"><br>  
        <button type="submit">Oblicz</button>
    </form>
    <h1>Zad 12 - Rejestracja użytkownika</h1>
    <form action="zad/rejestracja.php" method="post">
        Imię: <input type="text" name="imie" id="imie" pattern="[A-Za-z]{}"><br>
        Nazwisko: <input type="text" name="nazwisko" id="nazwisko" pattern="[A-Za-z]{}"><br>  
        <button type="submit">Wyślij</button>
    </form>
    <h1>Zad 13 - Zdjęcia</h1>
    <form action="zad/zdjecia.php" method="post"> 
        <input type="radio" id="piesek" name="opcja" value="piesek">
        <label for="html">Piesek</label><br> 
        <input type="radio" id="kotek" name="opcja" value="kotek">
        <label for="html">Kotek</label><br>
        <input type="radio" id="malpka" name="opcja" value="malpka">
        <label for="html">Małpka</label><br>
        <button type="submit">Wyświetl</button>
    </form>
    <h1>Zad 14/15 - Zapisywanie danych do pliku</h1>
    <form action="zad/zapisywanie.php" method="post"> 
        <input type="text" name="imie" id="imie" placeholder="Podaj imię"><br>
        <input type="text" name="nazwisko" id="nazwisko" placeholder="Podaj Nazwisko"><br>
        <input type="number" name="wiek" id="wiek" placeholder="Podaj Wiek"><br>
        <button type="submit">Zapisz dane</button>
        <button type="submit" name="pokaz">Wyświetl dane</button>
    </form>
    <h1>Zad 16/18 - Rejestracja (rozbudowane)</h1>
    <form action="zad/rejestracja2.php" method="get"> 
        <button type="submit">Rejestracja</button>
    </form>
    <h1>Zad 17 - Weryfikacja użytkownika</h1>
    <form action="zad/weryfikacja.php" method="post">
        Login: <input type="text" name="login" id="login"><br>
        Hasło: <input type="password" name="haslo" id="haslo"><br>
        <button type="submit" name="form">Zaloguj się</button>
    </form>
    <h1>Zad 19 - Konwersja Liczb</h1>
    <form action="zad/konwersja_liczb.php" method="post">
        <input type="hidden" name="form">
        Liczba całkowita (nieujemna): <input type="text" name="liczba" id="liczba"><br>
        <button type="submit" name="bin">Konwersja na bin</button>
        <button type="submit" name="hex">Konwersja na hex</button>
    </form>
    <h1>Zad 20 - Palindrom</h1>
    <form action="zad/palindrom.php" method="post">
        Podaj słowo: <input type="text" name="word" id="word"><br>
        <button type="submit" name="form">Sprawdź</button>
    </form>
    <h1>Zad 21 - Anagram</h1>
    <form action="zad/anagram.php" method="post">
        Podaj 1 słowo: <input type="text" name="slowo1" id="slowo1"><br>
        Podaj 2 słowo: <input type="text" name="slowo2" id="slowo2"><br>
        <button type="submit" name="form">Sprawdź</button>
    </form>
    <br>
    <footer>&copy; 2023 - Kamil Baraniak</footer>
</body>
</body>
</html>