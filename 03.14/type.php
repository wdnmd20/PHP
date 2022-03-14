<?php
$a = "8.76qb";
$b = (int)$a;
// $c = (float)$a;
settype($a, 'float');
$c = $a;
echo 'b = ' . $b . '<br />';
echo 'c = ' . $c;

?>
