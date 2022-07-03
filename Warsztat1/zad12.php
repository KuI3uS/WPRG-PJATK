<!DOCTYPE html>
<html>
<body>

<?php
$a=array(
    array(1,2),
    array(3,4),
    array(5,6),
);
echo( $a[0][0]);
echo("<br>");
for($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        echo $a[$i][$j],"\t";

    }

}

?>

</body>
</html>