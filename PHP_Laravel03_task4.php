<?php
/* for文の始めの値を定義する */
$start = 0;
/* for文の終わりの値を定義する */
$end = 100;

for($i = 1; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i ." ";
  }
$start += $i;
}