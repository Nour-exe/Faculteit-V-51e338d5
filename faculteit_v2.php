<?php
echo ("Welk getal is ") . PHP_EOL;
$input = readline("");
$i = 1;
$keer = 1;

while($i <= $input-1) {
   
    $i ++;
    $keer = $i *$keer; 

} 


echo "uw faculteit van " . $input .  " is " .$keer;
