<?php
//Task 1: Looping with Increment using a Function
$sNumber=1;
$EndNumber=20;
function evenNumberWL($sn,$en){
while($sn<=$en){
    if ($sn%2==0){
        echo "$sn\n";
    }
    $sn++;
    }   
}
function evenNumberDWL($sn,$en){
do {
    if ($sn%2==0){
        echo "$sn\n";
    }
    $sn++;
    } 
    while($sn<=$en);  
}
echo "Print Even Number Using While Loop.\n";
evenNumberWL($sNumber,$EndNumber);
echo "Print Even Number Using Do While Loop.\n";
evenNumberDWL($sNumber,$EndNumber);

?>