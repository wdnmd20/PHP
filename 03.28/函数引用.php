<?php
function &test() {
	static $b = 0;
	$b = $b + 1;
	echo $b . "<br/>";
	return $b;
}
$a = test(); // 1
$a = 5;
$a = test(); // 2
$a = &test(); // 3
$a = 5;
$a = test(); // 6
?>