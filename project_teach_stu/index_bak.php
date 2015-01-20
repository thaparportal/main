<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['teacher_code']))
	header("Location:home/home_t.php");
?>
<html>

<head>

  <meta charset="UTF-8">
<link rel="shortcut icon" href="favicon.jpg">

  <title>Thapar Portal</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url('img/back.jpg');
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 150px);
	left: calc(50% - 200px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}
.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>
<script>
					function signingupT()
					{
						window.open("register/","","width=1200,height=650");
					}
	
					function signingupS()
					{
						window.open("register/StudentSignUp.php","","width=1200,height=650");
					}
				
	</script>
</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Welcome to<span>Thapar Portal</span></div>
		</div>
		<br>
		<div class="login">
				<form action="#" method="post">
				<input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" name="signin" value="Login">
				<input type="button" onclick=signingupT() value="SignUp As Teacher">
				<input type="button" onclick=signingupS() value="SignUp As Student">
					
				</form>
		</div>

  <script src='/js/jquery.js'></script>

</body>

</html>
<?php
if(isset($_POST['signin']))
{
$xpass=$_POST['password'];
$xname=$_POST['user'];
if(empty($xname)) echo "<script> alert('Please enter some username'); </script>";
else {
if(empty($xpass)) echo "<script> alert('Please enter some password'); </script>";
else 
{
include_once 'php/connect.php';
$query="select * from teacher_info where teacher_code='$xname' LIMIT 1";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result) == 0)
{
	$query="select * from student_info where roll_number='$xname' LIMIT 1";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result) == 0)
	{
		echo 'Not Registered. Please Register';
	}
	else
	{
		echo 'Not Registered. Please Register';
	}
	echo 'Not Registered. Please Register';

{
while($r=mysqli_fetch_array($result))
{
#$teacher_code = $r['teacher_code'];
$password = $r['password'];
#$uid = $r['teacher_number'];
#$verify = $r['verify'];
$verify=1;
if($verify==1)
{
if((strcmp($password,$xpass))!=0) echo "<script> alert('WRONG PASSWORD ENTERED'); </script>"; 
else
{

#$_SESSION['teacher_number']=$uid;
$_SESSION['roll_number']=$xname;
header("Location:home/home_t.php");
}
}
else
{
echo "<script> alert('PLEASE VERIFY YOUR EMAIL ID'); </script>";
}
}
}

}
else
{
while($r=mysqli_fetch_array($result))
{
#$teacher_code = $r['teacher_code'];
$password = $r['password'];
#$uid = $r['teacher_number'];
#$verify = $r['verify'];
$verify=1;
if($verify==1)
{
if((strcmp($password,$xpass))!=0) echo "<script> alert('WRONG PASSWORD ENTERED'); </script>"; 
else
{

#$_SESSION['teacher_number']=$uid;
$_SESSION['teacher_code']=$xname;
header("Location:home/home_t.php");
}
}
else
{
echo "<script> alert('PLEASE VERIFY YOUR EMAIL ID'); </script>";
}
}
}
}
}
}
?>