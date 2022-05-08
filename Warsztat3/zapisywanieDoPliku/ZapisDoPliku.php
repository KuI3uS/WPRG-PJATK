<html>
<head>
</head>
<body>
<form method="post">
    Imię:
    <br>
    <label>
        <input type="text" name="name" required>
    </label>
    <br>
    Nazwisko:
    <label>
        <input type="text" name="lastName" required>
    </label>
    <br>
    <input type="submit" value="Zapisz">
</form>

<br>
<?php

$imie = $_POST["name"];
$nazwisko = $_POST["lastName"];


if(!$plik = fopen("file.txt", "a+")) {
    echo "problem z zapisem pliku";
} else {
    $rekord = $imie." ".$nazwisko."\n";
    fwrite($plik, $rekord);
    fclose($plik);
    echo "zapisano";
}

?>
</body>
</html>