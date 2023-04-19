<?php


function print_double_array($my_array)
{

    foreach ($my_array as $value) {

        foreach ($value as $test) {

            echo $test."\n";

        }

    }

}

?>