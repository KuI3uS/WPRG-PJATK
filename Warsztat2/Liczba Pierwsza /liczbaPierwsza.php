<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title> Liczba Pierwsza </title>
</head>
<body>
<form method="post">
    Liczba Pierwsza: <input type="text" name="number">
    <input type="submit" name="submit" value="submit">
</form>
<?php

if($_POST)
{
    $number=$_POST['number'];
    $zmienna = 0;
    for ($i = 2; $i <= $number-1; $i++) {
        $zmienna++;
        if ($number % $i == 0) {
            $value= True;
        }
    }
    if (isset($value) && $value) {
        echo 'Liczba '. $number . ' Nie jest liczbą pierwsza';
    }  elseif ($number == 1 ){
        echo 'Liczba '. $number . ' Nie Jest liczbą Pierwsza';
    }
    else {
        echo 'Liczba '. $number. ' Jest liczbą Pierwsza';
    }
    echo " Liczba wykonań pętli $zmienna";
}
?>


</body>
</html>