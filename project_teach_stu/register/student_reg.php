<?php 

include_once '../php/functions.php';
$con=mysqli_connect('localhost','root','','tucse');
$cpassword=$_POST['cpassword'];
$name=$_POST['name'];
$group=$_POST['group'];
$email=$_POST['email'];
$password=$_POST['password'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$roll_number=$_POST['roll_number'];

$flag=true;
//echo "$name $email $teacher_code $password  $mobno";

if(Password($password,$cpassword))
{	echo 'pass';
	if(Email($email))
	{ echo 'email';
 $vars=array('name'=>$name,'roll_number'=>$roll_number, 'email'=>$email, 'branch'=>$branch,'group'=>$group, 'password'=>$password,'year'=>$year);
     foreach ($vars as $key => $value)
		{
			if($value=='')
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
	$query='SELECT * FROM `student_info` WHERE `email`="'.$email.'" LIMIT 1';
	$result1=mysqli_query($con,$query);
	$b=mysqli_num_rows($result1);
	$query='SELECT * FROM `student_info` WHERE `roll_number`="'.$roll_number.'" LIMIT 1';
	$result2=mysqli_query($con,$query);
	$a=mysqli_num_rows($result2);
//echo $b;
	
	if($a==0 && $b==0)
	{
	$code=random_code(30);
$query="INSERT INTO `student_info` (`roll_number`, `name`, `group`, `branch`,`email`, `password`,`year`,`code`) VALUES ('$roll_number','$name','$group','$branch','$email','$password','$year','$code')" ;
		$result=mysqli_query($con,$query);
		echo $result;
		if($result)
		{
			$msg="Congratulations $name! You be now a registered!\nCheck your email for the mail!";
		}
		else
		{
			$msg="Please try again later.".$query;
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