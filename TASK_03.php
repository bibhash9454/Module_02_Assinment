<?php
$first=0;
$second=1;
$new=1;

for ($i=0;$i<=10;$i++){

if ($first>100){
break;
}
echo "$first\n";
$second=$new;
$new=$first+$second;
$first=$second;

}




?>