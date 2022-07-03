<!DOCTYPE html>
<html>
<body>

<?php
$a="*";
$b=" ";
$c=6;
for($i=0; $i<$c; $i++){
    for($j=0; $j<$i+1; $j++){
        echo($a);
    }

    echo("<br>");
}


for($i=$c; $i>0; $i--){
    for($j=0; $j<$i; $j++){
        echo($a);
    }
    echo("<br>");
}

for($i=0; $i<$c; $i++){
    for($j=0; $j<$i; $j++){
        echo("&nbsp&nbsp");
    }
    for($j=$c; $j>$i; $j--){
        echo($a);
    }
    echo("<br>");
}


for($i=$c; $i>0; $i--){
    for($j=0; $j<$i-1; $j++){
        echo("&nbsp&nbsp");
    }
    for($j=$c; $j>$i-1; $j--){

        echo($a);
    }


    echo("<br>");
}



?>

</body>
</html>