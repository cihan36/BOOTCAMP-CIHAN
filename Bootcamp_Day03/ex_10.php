<?php

function my_get_weird_info(){
$i = 0;
if(isset($_GET)){

    foreach($_GET as $value){
        $i++;
    }
    $_GET["nbr_elem"] = $i;
    foreach($_GET as $key=>$val){

        echo '$_GET["'.$key.'"] = "'.$val.'"';
    }
    return 0;

}
return null;


}

?>