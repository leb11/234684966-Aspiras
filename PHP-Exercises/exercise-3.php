<?php

for ($x = 1; $x <= 100; $x++) {
    if ($x % 3 == 0 && $x % 5 == 0 ) {
        echo "FizzBuzz \n";
    } elseif ($x % 3 == 0) {
        echo "Fizz \n";
    } elseif ($x % 5 == 0){
        echo "Buzz \n";
    } else {
        echo "$x \n"  ;    
    }
}


$first_num = 0;  
$second_num = 1;  
$n = 10;
 
for($i = 2; $i < $n; $i++) {  
    $next_num = $first_num + $second_num;  
    if ($next_num % 2 == 0){
        echo "$next_num \n";
    } 
    $first_num = $second_num;  
    $second_num = $next_num;  
}  



?>