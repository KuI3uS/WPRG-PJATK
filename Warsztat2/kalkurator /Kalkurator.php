<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post">

    <input type="radio" name="znak" value="+" />+<br />
    <input type="radio" name="znak" value="-" />-<br />
    <input type="radio" name="znak" value="/" />/<br />
    <input type="radio" name="znak" value="*" />*<br />

    podaj1<br> <input type="text" name="liczba1"/><br />
    podaj2<br> <input type="text" name="liczba2"/><br />

    <input type="submit" value="Oblicz" /> <br>
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
echo 'Wynik działania '.$liczba1.' '.$_POST['znak'].' '.$liczba2.' wynosi ';
switch($_POST['znak']) {
    case "+":
        echo $liczba1 + $liczba2; break;
    case "-":
        echo $liczba1 - $liczba2; break;
    case "/":
        echo $liczba1 / $liczba2; break;
    case "*":
        echo $liczba1 * $liczba2; break;

}
?>

</body>
</html>
