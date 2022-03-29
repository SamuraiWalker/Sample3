<?php
function multi_array($arr) {
    $multi_number = 1;
    foreach($arr as $a){
        $multi_number *= $a;
    }
    return $multi_number;
}
echo multi_array(array(1,3,5,7,9));
?>