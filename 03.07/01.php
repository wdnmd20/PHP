<?php
$str = "副省长肖菊华一行莅临长江职业学院调研指导平安校园建设与春季开学工作";
if (strlen($str) > 30) {
    echo substr($str, 0, 30) . '......';
} else {
    echo $str;
}