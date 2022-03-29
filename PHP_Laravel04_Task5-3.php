<?php
$Yamanote1 = ['Ikebukuro','Otsuka','Sugamo','Komagome','Tabata'];
$Yamanote2 = ['Nishinippori','Nippori','Uguisudani','Ueno','Okachimachi'];
$Yamanote3 = ['Akihabara','Kanda','Tokyo','Yurakucho','Shinbashi'];

$Yamanote_merge = array_merge($Yamanote1,$Yamanote2,$Yamanote3);

print_r($Yamanote_merge);
?>