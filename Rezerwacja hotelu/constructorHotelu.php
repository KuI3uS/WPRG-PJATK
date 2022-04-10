<?php
if(isset($_POST['submit']))
{
    $Zameldowanie = $_POST['Rezerwacja od'];
    $Wymeldowanie = $_POST['Rezerwacja do'];
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
    $Email = $_POST['Email'];
    $Adres = $_POST['Adres'];
    $Telefon = $_POST['Telefon'];
    $Dorośli = $_POST['Dorośli'];
    $Dzieci = $_POST['Dzieci'];
    $Rodzaj_Pokoi = $_POST['Rodzaj apartamentu'];



    echo "Data Zameldowania : " . $Zameldowanie . "<br>";
    echo "Data Wymeldowania : " . $Wymeldowanie . "<br>";
    echo "Twoje imie : " . $Imie . "<br>";
    echo "Twoje Nazwisko : " . $Nazwisko . "<br>";
    echo "Twój Email : " . $Email . "<br>";
    echo "Twój Adres : " . $Adres . "<br>";
    echo "Twój numer Telefonu : " . $Telefon . "<br>";
    echo "Ilość osób dorosłych : " . $Dorośli . "<br>";
    echo "Ilość dzieci : " . $Dzieci . "<br>";
    echo "Ilość Pokoi : " . $Ilość_Pokoi . "<br>";
    echo "Rodzaj Pokoi : " . $Rodzaj_Pokoi . "<br>";
}
?>