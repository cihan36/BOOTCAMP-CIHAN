<?php

function my_aff_globals(){

foreach($GLOBALS as $key => $value) {
        if(is_string($value))
        echo $key." => ".$value."\n"; 


}

}


?>