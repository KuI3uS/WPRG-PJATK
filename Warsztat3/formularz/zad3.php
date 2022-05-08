<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
</head>
<body>
<form class="Rezerwacja Hotelu" method="post">
    <h1><i class="far fa-calendar-alt"></i>Formularz</h1>
    <div class="fields">
        <label for="Zameldowanie">Zameldowanie</label>
        <div class="field">
            <input id="Zameldowanie" type="date" name="Zameldowanie" required>
        </div>
        <div class="gap"></div>
        <div>
            <label for="Wymeldowanie">Wymeldowanie</label>
            <div class="exit">
                <input id="Wymeldowanie" type="date" name="Wymeldowanie" required>
            </div>
        </div>
    </div>
    <div>
        <label for="Imie">Imie</label>
        <div class="name">
            <input id="Imie" type="text" name="Imie" placeholder="Imie" required>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="Nazwisko">Nazwisko</label>
        <div class="field">
            <i class="user"></i>
            <input id="Nazwisko" type="text" name="Nazwisko" placeholder="Nazwisko" required>
        </div>
    </div>
    </div>
    <label for="Email">Email</label>
    <div class="field">
        <input id="Email" type="Email" name="Email" placeholder="Twój Email" required>
    </div>
    <label for="Adres">Adres</label>
    <div class="field">
        <input id="email" type="Adres" name="Adres" placeholder="Adres" required>
    </div>
    <label for="Telefon">Telefon</label>
    <div class="field">
        <input id="Telefon" type="tel" name="Telefon" placeholder="Telefon" required>
    </div>
    <div>
        <label for="Dorośli">Osoby</label>
        <div class="field">
            <select id="Dorośli" name="Dorośli" required>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
    </div>
    <label for="Rodzaj apartaentu">prodzaj apartamentu</label>
    <div class="field">
        <select id="Rodzaj apartamentu" name="prodzaj apartamentu" required>
            <option value="Standardowy">Standardowy</option>
            <option value="Premium">przemium</option>
        </select>
    </div>
    <input type="submit" name="submit" value="Rezerwuje">
    </div>
</form>


<?php


$Zameldowanie = $_POST['Rezerwacja od'];
$Wymeldowanie = $_POST['Rezerwacja do'];
$Imie = $_POST['Imie'];
$Nazwisko = $_POST['Nazwisko'];
$Email = $_POST['Email'];
$Adres = $_POST['Adres'];
$Telefon = $_POST['Telefon'];
$Dorośli = $_POST['Dorośli'];
$Rodzaj_Pokoi = $_POST['Rodzaj apartamentu'];




if(isset($_POST['Rezerwuje'])){
    if ($plik = fopen("plik.csv","a+")) {
        $dane = $Zameldowanie.";".$Wymeldowanie.";".$Imie.";".$Nazwisko.";".$Email.";".$Adres.";".$Telefon.";".$Dorośli.";".$Rodzaj_Pokoi.";"."\n";
        fwrite($plik,$dane);
        fclose($plik);
    } else echo "plik nie zapisany";
}


?>
</body>
</html>