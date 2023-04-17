<?php

function print_range($min)
{
    $i = $min;
    do {
        echo $i++ . "\n";
    } while ($i <= 42);
    return $min == 42;

}


?>