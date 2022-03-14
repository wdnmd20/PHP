<?php
$student = [
    'studentNo' => '44',
    'name'  => '钱博',
    'age' => 20,
    'tel' => '18888888888'
];
$student['email'] = '18827194571@163.com';
echo '输出数组所有元素：';
print_r($student);
echo '<br />';
echo 'sort排序：';
sort($student);
print_r($student);
echo '<br />';
echo 'asort排序：';
asort($student);
print_r($student);
echo '<br />';
ksort($student);
print_r($student);
echo '<br />';



?>
