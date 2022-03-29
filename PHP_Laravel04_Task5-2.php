<?php
function NATO_Countries($arr){
    array_push($arr,'Macedonia','Ukraine');
    foreach($arr as $a){
        echo $a;
        echo "\n";
    }
}
NATO_Countries(array('USA','England','Italy','Iceland','Netherlands','Canada','Denmark','Norway','France','Belgium','Portuguese',
'Luxembourg','Hellenic','Turkey','Germany','Spain','Czech','Hungary','Poland','Estonia','Slovak','Slovenia','Bulgaria',
'Latvia','Lithuania','Romania','Albania','Croatia','Montenegro'));
?>