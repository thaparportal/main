<?php 
include_once '../php/connect.php';
include_once '../php/functions.php';

$name=$_POST['name'];
$email=$_POST['email'];
$teacher_code=$_POST['teacher_code'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mobno=$_POST['mobno'];
$flag=true;

if(Password($password,$cpassword))
{
	if(Email($email))
	{
		$vars=array('name'=>$name,'teacher_code'=>$teacher_code, 'email'=>$email, 'mobno'=>$mobno, 'password'=>$password);
		foreach ($vars as $key => $value)
		{
			if($value=='' && $key!='mobno')
			{
				$flag=false;
				$msg='Please enter a '.$key;
				break;
			}
			elseif(!Check($value))
			{
				$flag=false;
				$msg='Invalid '.$key;
				break;
			}
		}
	}
	else
	{
		$flag=false;
		$msg='Email not valid';
	}
}
else
{
	$flag=false;
	$msg='Passwords do not match';
}
if($flag)
{
	$query='SELECT * FROM `teacher_info` WHERE `email`="'.$email.'" LIMIT 1';
	$result1=mysqli_query($con,$query);
	$a=mysqli_num_rows($result1);
	$query='SELECT * FROM `teacher_info` WHERE `teacher_code`="'.$teacher_code.'" LIMIT 1';
	$result2=mysqli_query($con,$query);
	$b=mysqli_num_rows($result2);

	if($a==0 && $b==0)
	{
	$code='f';
		$query='INSERT INTO `'.DB.'`.`teacher_info` (`teacher_number`, `name`, `teacher_code`, `mobno`, `email`, `password`, `code`) VALUES (NULL,\"$name\",\"$teacher_code\",\"$mobno\",\"$email\",\"$password\",\"$code\")' ;
	$result=mysqli_query($con,$query);
		$result = 0;
		if($result)
		{
			//mail
			$mesg="<a href=\"http://localhost/project_teach_stu/verify.php?code=$code\" target=\"_blank\">Click this link</a> to verify your E-mail.<br> You can also enter the verification code on <a href=\"http://localhost/project_teach_stu/verify.php\" target=\"_blank\">http://localhost/project_teach_stu/verify.php</a> manually.<br><b>VERIFICATION CODE:$code";
			$headers='';
			//Fix for mail
			$headers .= "MIME-Version: 1.0\r\n";
		    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .='From: captain@cyb3rpirat3s.in';
			//$mail=mail($email,"Verification code for Cyber Pirates",$mesg,$headers);
			$msg="Congratulations $name! You be now a registered!\nCheck your email for the mail!";
		}
		else
		{
			$msg="Please try again later.";
			$File=fopen("sf.txt","a");
			//$msg=$query;
			fwrite($File,$query."\n");
		}
	}
	else
	{
		$msg='You are already Registered';
	}
}
else
	$msg='Error';
?>