<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post">
    a<br> <input type="text" name="a" /><br />
    b<br> <input type="text" name="b" /><br />
<select name="wyb">
    <option type="radio" name="+" value="+" />+<br />
    <option type="radio" name="-" value="-" />-<br />
    <option type="radio" name="*" value="*" />*<br />
    <option type="radio" name="/" value="/" />/<br />
<select/>
    <input type="submit" value="Oblicz" /> <br>
</form>
<?php
include ('katCon.php');
$a = $_POST["a"];
$b = $_POST["b"];
$wynik = $_POST["wyb"];

switch ($wynik){
    case "+": dodawanie($a,$b);
        break;
    case "-": odejmowanie($a,$b);
        break;
    case "*": mnozenie($a,$b);
        break;
    case "/": dzielenie($a,$b);
        break;
}

?>

</body>
</html>
