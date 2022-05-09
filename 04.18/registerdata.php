<!DOCTYPE html>
<html>
<head>
<!-- <meta charset="UTF-8"> -->
<title>用户注册</title>
</head>
<?php

if($_POST['stuNo'])
{
    $stuNO=$_POST['stuNo'];
  }
else {
    $stuNO='没有填写学号';
}
if($_POST['stuName'])
{
    $stuName=$_POST['stuName']; 
}
else {
    $stuName='没有填写姓名';
}
if($_POST['className'])
{
    $className=$_POST['className'];
}
else {
    $className='没有选择班级';
}
if($_POST['sex'])
{
    $sex=$_POST['sex'];
}
else {
    $sex='没有选择性别';
}

if($_POST['mobile'])
{
    $mobile=$_POST['mobile'];
}
else {
    $mobile='没有填写手机号';
}
if($_POST['email'])
{
    $email=$_POST['email'];
}
else {
    $email='没有填写邮箱';
}
// var_dump($_POST);
/*if($_POST['img'])
{
    $img=$_POST['img'];
}
else {
    $img='没有上传图片';
}*/


var_dump($_FILES);
echo '<br>';
var_dump($_POST);
$imgname=$_FILES['img']['name'];
$lujing='Uploads/'.$imgname;
move_uploaded_file($_FILES['img']['tmp_name'],$lujing);
 //var_dump($_FILES);

//var_dump($_POST);
?>
<h1>恭喜你，注册成功，你的注册信息如下</h1> 

学号：<?=$stuNO?> <br/>

姓名：<?=$stuName?><br/>

班级：<?=$className?><br/>

性别：<?=$sex?><br/>

手机：<?= $mobile?><br/>

邮箱：<?=  $email?><br/>

<!-- 照片：<?=  $img?><br/> -->


照片：<img src='<?=$lujing?>' style='width: 100px;height:100px'/>

