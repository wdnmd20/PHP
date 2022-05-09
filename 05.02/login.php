<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
    <?php
    include 'header.html';
    ?>
    <div id="box">
        <form>
            <input type="text" placeholder="请输入学号"/><br/>
            <input type="text" placeholder="请输入登录密码"/><br/>
            <input type="text" placeholder="请输入验证码" name="yanzhengma"/><br/>
            <img id="yzm" alt="" src="yzm.php"><br/>
            <button>登录</button>
        </form>
    </div>
    <?php
    include 'footer.html';
    ?>
</body>
</html>