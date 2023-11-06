<?php
$number1 = (rand(10,100));
$number2 = (rand(10,100));

$optellen = $number1 + $number2;
$aftrekken = $number1 - $number2;
$keer = $number1 * $number2;
$delen = $number1 / $number2;
echo nl2br ("$number1\n$number2\n$optellen\n$aftrekken\n$keer\n$delen");

   
$getal = 6;   
for($i=1; $i<=10; $i++)   
{   
  echo $i*$getal;   
  echo '<br>';     
}  
?>  

