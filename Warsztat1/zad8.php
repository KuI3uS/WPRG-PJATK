<!DOCTYPE html>
<html>
<body>

<?php
$a=array(1,3,2);
$b=array(1,3,2);
$x=count($a);
$y=count($b);


while ($x>0){
    for($i=1; $i<$x; $i++){
        if($b[$i]>$b[$i-1]){
            $key=$b[$i-1];
            $b[$i-1]=$b[$i];
            $b[$i]=$key;
        }
        $x--;
    }
}
foreach($b as $brr){
    echo("\t".$brr);

}


?>

</body>
</html>