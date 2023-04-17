<?php 

function print_arr_key($my_array = ["One" => "1", "Two" => "2", "Three" => "3"]){

foreach($my_array as $key => $value){

    echo "$key = $value\n";

}    


}
print_arr_key()
?>