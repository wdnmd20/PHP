<?php
date_default_timezone_set('PRC');
$day = date('D');
if ($day == 'Mon') {
	echo 'Today is Monday. I\'m taking Ms Tang\'s class.';
} elseif ($day == 'Tue') {
	echo 'There will be an English class on this day, Tuesday.';
} elseif ($day == 'Wed') {
	echo 'Today is Wednesday.';
} elseif ($day == 'Thu') {
	echo 'What a lovely day, Thursday! And no classes today!';
} elseif ($day == 'Fri') {
	echo 'Although it\'s Friday today, but I\'m happy. You know why.';
} elseif ($day == 'Sat') {
	echo 'Take a relax, bro. Today is Saturday.';
} else {
	echo 'Take a relax, bro. Today is Sunday.';
}
?>