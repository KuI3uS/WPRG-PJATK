<!DOCTYPE html>
<html>
<body>

<?php
$a=290;
if(is_string($a)==true || $a<=0 || $a>365){
    echo("blad");
}
else{
    switch($a){
        case $a>0 && $a<=31:
            echo("styczen ".$a);
            break;

        case $a>31 && $a<=59:
            echo("luty ".$a-31);
            break;

        case $a>59 && $a<=90:
            echo("marzec ".$a-59);
            break;

        case $a>90  && $a<=120:
            echo("kwiecien ".$a-90);
            break;

        case $a>120  && $a<=151:
            echo("maj ".$a-120);
            break;

        case $a>151  && $a<=181:
            echo("czerwiec ".$a-151);
            break;

        case $a>181  && $a<=212:
            echo("lipiec ".$a-181);
            break;

        case $a>212  && $a<=243:
            echo("sierpien ".$a-212);
            break;

        case $a>243  && $a<=273:
            echo("wrzesien ".$a-243);
            break;

        case $a>273  && $a<=304:
            echo("pazdzernik ".$a-273);
            break;

        case $a>304  && $a<=334:
            echo("listopad ".$a-304);
            break;

        case $a>334  && $a<=365:
            echo("grudzien ".$a-334);
            break;
    }
}

?>



</body>
</html>