<?php
$sum = 0;
$i = 1;
do {
	$sum += $i;
	++$i;
} while($i <= 100);
	echo '1到100总数为：' . $sum;
?>