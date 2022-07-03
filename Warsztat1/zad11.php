<!DOCTYPE html>
<html>
<body>

<?php


$a="The quick brown fox jumps over the lazy dog";

function pangram($a)
{
    $x=strtoupper($a);
    if(strlen($x)<26)
    {
        echo("false");;
    }
    else {
        for($i='A' ; $i<'Z' ;$i++)

        {

            if(strpos($x,$i)<0)
            {
                echo("false");



            }
        }
        echo("true");
    }
    //echo("$x");

}
pangram($a);


?>

</body>
</html>