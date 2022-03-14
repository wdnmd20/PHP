<?php
$name = '钱博';
date_default_timezone_set('PRC');
$time = date("H:i:s");
$hours = date("H");
echo '现在是北京时间 ' . $time . ' , ';
if ($hours >= 6 && $hours <= 9) {
	echo '早上好，' . $name;
} elseif ($hours > 9 && $hours <= 12) {
	echo '上午好，' . $name;
} elseif ($hours > 12 && $hours <= 19) {
	echo '下午好，' . $name;
} elseif ($hours > 19 && $hours <= 22) {
	echo '晚上好，' . $name;
} else {
	echo '该睡觉了，' . $name;
}
?>
