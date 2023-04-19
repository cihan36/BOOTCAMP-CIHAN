<?php

function goto_evil()
{
    $i = 0;
    a:
    if ($i < 42) {
        echo "wac\n";
        $i++;
        goto a;

    }


}
goto_evil();



?>