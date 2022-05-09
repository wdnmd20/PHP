<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<table style="border: 1px solid red">
		<tr>
			<td>学号</td>
			<td><input type="text" name="stuId" id="number"></td>
		</tr>
		<tr>
			<td>姓名</td>
			<td><input type="text" name="stuName" id="username"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="password1" id="password1" value=""/></td>
		</tr>
		<tr>
			<td>确认</td>
			<td><input type="password" name="password2" id="password2" value=""/></td>
		</tr>
		<tr>
			<td>班级</td>
			<td><select name="className">
				<option value="计网2001班" selected="selected">计网2001班</option>
				<option value="计网2002班" selected="selected">计网2002班</option>
			</select></td>
		</tr>
		<tr>
			<td>性别</td>
			<td>男<input type="radio" name="gender" value="男"/>女<input type="radio" name="gender" value="女"></td>
		</tr>
		<tr>
			<td>手机</td>
			<td><input type="text" name="tel" value=""></td>
		</tr>
		<tr>
			<td>邮箱</td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td>验证</td>
			<td><img src="captcha.php" alt=""/><br/>
				<input type="text" name="captcha" id="captcha">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="注册"></td>
		</tr>
	</table>
</form>
</body>
</html>
