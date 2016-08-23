<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="shortcut icon" href="favicon1.ico" />
<link rel="stylesheet" type="text/css" href="../css/style.css" >
<link rel="stylesheet" type="text/css" href="../css/oneform.css" >
<title>注册</title>
<script>
function check() {
	var name = document.getElementById('username');
	var pwd = document.getElementById('password');
	var num = document.getElementById('password').value.length;
	if (name.value=='') {
		alert('用户名不能为空');
		name.focus();
		return false;
	}
	if (pwd.value=='') {
		alert('密码不能为空');
		pwd.focus();
		return false;
	}
	if(num < 6) {
		alert('密码不少于6位');
		pwd.focus();
		return false;
	}
}
</script>

</head>

<body>
<?php
if(isset($_POST['button'])) {
	$usename =$_POST['username'];
	$password = $_POST['password'];
	mysql_connect('localhost','root','root')or die(mysql_error());
	mysql_select_db('demo');
	mysql_query('set names utf8');
	$sql = "insert into friends values(null,'$username','$password')";
	if(mysql_query($sql)) {
		//echo '插入成功';
		 header('location:admin.php');//用header进行页面跳转总是报错
		 die("<script>window.self.location.href='admin.php';</script>");//网上百度这种跳转不会报错
	}
	else echo '插入失败';
}
?>

<div class="example">
<ul id="nav">
            <li><a href="../index.html" >Home</a></li>
             <li><a href="login.php">Go back</a></li>
         </ul>
<div id = "oneform">
           <form name="form1" method="post" action="" onSubmit="return check()">
              <table cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" align="center"><strong>注册</strong></td>
                </tr>
                <tr>
                  <td id="text0" width="200" align="right">用户名：</td>
                  <td width="200"><label for="textfield"></label>
                  <input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                  <td id="text0" align="right">密码：</td>
                  <td><label for="textfield2"></label>
                  <input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                  <td id="text1" colspan="2" align="center"><input type="submit" name="button" id="button" value="提交" ></td>
                </tr>
              </table>
            </form>
      </div>
</div>
</body>
</html>

