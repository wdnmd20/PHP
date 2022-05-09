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
