<?php
// 数字转字符串
$id = 20203514;
echo var_dump($id);
echo "<br/>";
$id = strval($id);
echo var_dump($id);
echo "<br/>";

// 随机数
echo rand(0, 100);
echo "<br/>";

// MD5加密
echo md5("钱博");
echo "<br/>";

// 四舍五入
$a = 3.15;
$b = 3.14;
echo round($a, 1); // 保留一位小数
echo "<br/>";
echo round($b, 1);
?>