<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<style type="text/css">
body{
    margin:0px;
    text-align:center;
}
#reg{
    width:370px;
    border:1px solid blue;
    line-height:40px;
    margin:0 auto;
    padding-left:100px;
    padding-top:15px;
    padding-bottom:15px;
    text-align:left;
    font-size:14px;
}
.error{
    color:red;
}
</style>

</head>
<body>
    <?php
    include 'header.html';
    ?>
<h1>用户注册</h1>
<form action="registerdata.php" method="post" enctype="multipart/form-data">
<div id="reg">
<div>
学号：<input type="text" name="stuNo"/>
</div>
<div>
姓名：<input type="text" name="stuName"/>
</div>
<div>
密码：<input type="password" name="pwd"/>
<div style="margin-left:-28px;">
确认密码：<input type="password" name="confirmPwd"/>
</div>
<div>
班级：<select name="className">
<option value="计网2002班">计网2001班</option>
<option value="计网2002班">计网2002班</option>
<option value="20200103">计应2001班</option>
<option value="20200104">计应2002班</option>
<option value="20200201">计应2003班</option>
<option value="20200202">计应2004班</option>
<option value="20200301">计应2005班</option>
<option value="20200302">计应2006班</option>
</select>
</div>
<div>
性别：<input type="radio" name="sex" value="男" checked>男
<input type="radio" name="sex" value="女">女
</div>
<div>
手机：<input type="text" name="mobile"/>
</div>
<div>
邮箱：<input type="text" name="email"/>
</div>
<div>
照片：<input type="file" name="img">
</div>
<div>
自我介绍：<textarea rows="3" cols="10"></textarea>
</div>
<div>
验证码：<input type="text" name="yanzhengma"/>
<img alt="" src="yzm.php">
</div>

<div style="margin-left:-28px;">
<input type="submit" name="btnSubmit" value="注册"/>
</div>
</div>
</div>
</form>
<?php
include 'footer.html';
?>
<?php 
/*function random_text($count,$rm=false){
    $chars=array_flip(array_merge(range(0, 9),range('A', 'Z'),range('a','z')));
    // $chars='abcdefghkABCD0123';
    if ($rm) {
        unset($chars[0],$chars['o'],$chars['O'],$chars[1],$chars['I']);
    }
    for ($i = 0,$text=''; $i < $count; $i++) {
        $text.=array_rand($chars);
    }
    return $text;
}

// echo random_text(6);


// print_r($chars) ;
// phpinfo()


//<img alt="" src="yzm.php">

 // header('Content-type: image/png');
$im=imagecreate(120, 30);
$bg=imagecolorallocate($im, 156, 250, 185);
$ag=imagecolorallocate($im, 0, 0, 0);
imagefill($im, 120, 30, $bg);

$text= random_text(5);
imagestring($im, 5,50, 2, $text,$ag);
imagepng($im);
// */
?>


