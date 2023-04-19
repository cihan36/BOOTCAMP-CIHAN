<?php 

function is_similar($a, $b){

if($a == $b){
    echo "Same value";

}elseif(gettype($a) == gettype($b)){

echo "Same type";

    }

}



?>