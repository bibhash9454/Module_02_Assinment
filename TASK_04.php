<?php
function fibonacci($number)
{
if ($number==0)
return 0;
elseif ($number==1)
return 1;
else
return (fibonacci($number-1) + fibonacci($number-2));
}
function PrintFibonacci($fPosition){
for ($i=0;$i<=$fPosition;$i++){
 echo "F$i=".fibonacci($i)."\n";
}
}
echo "Fibonacci Series.\n";
PrintFibonacci(15);
?>