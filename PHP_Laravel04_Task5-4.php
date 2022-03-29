<?php
echo '現在のUNIXタイムスタンプ:' .time();
echo "\n";

$after_3days = time() + (3 * 24 * 60 * 60);
echo '3日後のUNIXのタイムスタンプ:' .$after_3days;
echo "\n";

$timestamp = mktime(0,0,0,18,11,1974);
echo '1974年11月18日のUNIXのタイムスタンプ:' .$timestamp;
echo "\n";

echo date('Y/m/d');
echo "\n";
?>