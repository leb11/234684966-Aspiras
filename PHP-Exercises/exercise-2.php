<?php
    $num = 0;
if (($num % 2) == 0 ){
echo "The number is even";
} elseif (($num % 1) == 0) {
echo "The number is odd";
} 

if ($num > 0 ) {
echo " and The number is positive";
} elseif ($num < 0 ) {
echo " and The number is negative";
} else {
echo " and the number is 0";
}
?>