<?php 
#include_once '../php/connect.php';
include_once '../php/functions.php';
$con=mysqli_connect('localhost','root','','tucse');
$name=$_POST['name'];
$email=$_POST['email'];
$teacher_code=$_POST['teacher_code'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mobno=$_POST['mobno'];
$flag=true;
//echo "$name $email $teacher_code $password  $mobno";

if(Password($password,$cpassword))
{	echo 'pass';
	if(Email($email))
	{ echo 'email';
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
				echo $msg;
				break;
				
			}
		}
	}
	else
	{
		$flag=false;
		$msg='Email not valid';
		echo $msg;
	}
}
else
{
	$flag=false;
	$msg='Passwords do not match';
	echo $msg;
}
if($flag)
{
	$query='SELECT * FROM `teacher_info` WHERE `email`="'.$email.'" LIMIT 1';
	$result1=mysqli_query($con,$query);
	$a=mysqli_num_rows($result1);
	$query='SELECT * FROM `teacher_info` WHERE `teacher_code`="'.$teacher_code.'" LIMIT 1';
	$result2=mysqli_query($con,$query);
	$b=mysqli_num_rows($result2);
//echo $b;
	
	if($a==0 && $b==0)
	{
	$code=random_code(30);
$query="INSERT INTO `teacher_info` (`teacher_number`, `name`, `teacher_code`, `mobile_no`, `email`, `password`, `code`) VALUES (NULL,\"$name\",\"$teacher_code\",\"$mobno\",\"$email\",\"$password\",\"$code\")" ;
		$result=mysqli_query($con,$query);
		echo $result;
		if($result)
		{
			$msg="Congratulations $name! You be now a registered!\nCheck your email for the mail!";
		}
		else
		{
			$msg="Please try again later.";
			echo $msg;
			$File=fopen("sf.txt","a");
			fwrite($File,$query."\n");
		}
	}
	else
	{
		$msg='You are already Registered';
		echo $msg;
	}
}
?>