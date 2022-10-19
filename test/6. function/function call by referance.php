<?php

// functions are defined only one time and can be used many times, like in other programming languages.


function first($num)
{
    $num += 5;
}
function second(&$num)
{
    $num += 7;
}
$number = 10;
first($number);
echo "original value is : $number <br>";


second($number);
echo "original value is : $number <br>";


?>