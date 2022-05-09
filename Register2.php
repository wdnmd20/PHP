<?php
		 include'headernav.html'
		 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户注册</title>
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
<h1>用户注册</h1>
<form action="registerdata.php" method="post" enctype="multipart/form-data">
<div id="reg">
<div>
学号：<input type="text" name="stuNo"/><span class="error">*</span>
</div>
<div>
姓名：<input type="text" name="stuName"/><span class="error">*</span>
</div>
<div>
密码：<input type="password" name="pwd"/><span class="error">*</span>
<div style="margin-left:-28px;">
确认密码：<input type="password" name="confirmPwd"/><span class="error">*</span>
</div>
<div>
班级：<select name="className">
<option value="计网2002班">计网2001班</option>
<option value="20200102">计网2002班</option>
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
手机：<input type="text" name="mobile"/><span class="error">*</span>
</div>
<div>
邮箱：<input type="text" name="email"/>
</div>
<div>
照片：<input type="file" name="img">
<br/>*上传文件大小不超过2M，必须是.jpg/.gif/.png/.jpge
</div>
<div>
自我介绍：<textarea rows="3" cols="10"></textarea>
</div>
<div>
验证码：<input type="text" name="yanzhengma"/><span class="error">*</span>
<br/><img alt="" src="yzm.php">
</div>

<div style="margin-left:-28px;">
<input type="submit" name="btnSubmit" value="注册"/>
</div>
</div>
</div>
</form>
<script type="text/javascript">
var elform = document.getElementsByTagName("form")[0]; //获取表单
elform.onsubmit=function(){ 
	//表单提交，调用checkData()函数验证数据，如果验证出错，中止表单提交
	return checkData(); 
}
//验证各项用户输入的数据
function checkData(){
	var valid=true;  //验证是否通过的标识
	//学号必填
	var elStuNo=document.getElementsByName("stuNo")[0];  //获取学号文本框
    if(elStuNo.value==""){
    	elStuNo.nextSibling.innerHTML="*学号必填！";	//学号文本框右侧的文字标签显示提示信息
		valid=false;  //验证错误
    }
    else{
    	elStuNo.nextSibling.innerHTML="*";  //清除错误提示信息
    }

	//姓名必填
	var elStuName=document.getElementsByName("stuName")[0];  //获取姓名文本框
	if(elStuName.value==""){
		elStuName.nextSibling.innerHTML="*姓名必填！";			
		valid=false;        
    }
	else{
		elStuName.nextSibling.innerHTML="*";
    }
    // 密码必填 吴正峰
var elpassword=document.getElementsByName("pwd")[0];  //获取姓名文本框
	if(elpassword.value==""){
		elpassword.nextSibling.innerHTML="*密码必填！";			
		valid=false;        
    }
	else{
		elpassword.nextSibling.innerHTML="*";
    }
    // 密码和确认密码要一致
    var confirmPwd=document.getElementsByName("confirmPwd")[0];
    if(confirmPwd.value!=elpassword.value){
    	confirmPwd.nextSibling.innerHTML="*确认密码和密码不一致！";
    valid=false; 
    }
    else{
		confirmPwd.nextSibling.innerHTML="*";
    }
    // 手机号必填 （余文昊）
    var elmobile=document.getElementsByName("mobile")[0];  //获取姓名文本框
	if(elmobile.value==""){
		elmobile.nextSibling.innerHTML="*手机号必填！";			
		valid=false;        
    }
	else{
		elmobile.nextSibling.innerHTML="*";
    }
    // 输入有效的手机号
   // var elmobile=document.getElementsByName("mobile")[0]; 
    var regexmobile=/^1[3|5|8]\d{9}$/;
    if(elmobile.value!=""&&!regexmobile.test(elmobile.value)){
    	elmobile.nextSibling.innerHTML="*输入有效手机号！";			
		valid=false;
    }
    
    // 验证码必填（吴剑）
     var elyanzhengm=document.getElementsByName("yanzhengma")[0];  //获取姓名文本框
	if(elyanzhengm.value==""){
		elyanzhengm.nextSibling.innerHTML="*验证码必填！";			
		valid=false;        
    }
	else{
		elyanzhengm.nextSibling.innerHTML="*";
    }
    
return valid;
}
    
</script>
 <?php
		 include'footer.html'
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


