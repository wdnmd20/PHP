<?php
$student = [
    'studentNo' => '44',
    'name' => '钱博',
    'age' => 20,
    'tel' => '18888888888'
];
$student['email'] = '18827194571@163.com';
foreach($student as $key => $value) {
    echo "{$key} --> {$value}<br />";
}