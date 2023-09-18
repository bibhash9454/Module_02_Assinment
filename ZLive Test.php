<?php
// 1. Create a PHP script using a loop to print all even numbers between 1 and 10.
$sn=1;
$en=10;
while($sn<=$en){
    if ($sn%2==0){
        echo "$sn\n";
    }
    $sn++;
    } 
?>
<?php 
//2. Declare a function named 'greet' that takes one parameter, 'name'. The function should print 
//a greeting message with the name passed to it when it is called.
function greet($name){
    echo "Hi' $name is a Greeting message for you.";
}
greet("Bibhash Bepari");

?>
<?php 
//3. Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.
function factorial($in)  
{  
  if($in <= 1) {  
    return 1;  
  }  
  else{  
    return $in * factorial($in - 1);  
  }  
}  
$in = 5;  
echo "Factorial  $in = " .factorial($in);
?>
<?php 
// 4. Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.
$first=0;
$second=1;
$new=1;
for ($i=0;$i<=10;$i++){
echo "$first\n";
$second=$new;
$new=$first+$second;
$first=$second;
}
?>