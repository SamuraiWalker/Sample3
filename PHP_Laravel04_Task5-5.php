<?php
echo date('Y/m/d');
echo "\n";

// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";

//第二引数にUNIXタイムスタンプを指定
echo date('Y-m-d H:i:s', 10);
echo "\n";

echo date('Y/m/d', time());
echo "\n";

$after_3days = time() + (3*24*60*60);
echo date('Y/m/d', $after_3days);

?>