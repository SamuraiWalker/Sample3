<?php
$str = <<<EOM
<html>
<head>
<title>PHP_Laravel04の課題5 strip_tagsの使い方</title>
</head>
<body>
  <h1>strip_tagsとは</h1>
</body>
</html>
EOM;
echo strip_tags($str) . "\n";
?>