<?php
include '../php/connect.php';
session_start();
if(isset($_SESSION['teacher_code']))
{
	$tcode=$_SESSION['teacher_code'];
}
else
{
	header("Location:../");
}
$query="SELECT department FROM `teacher_info` WHERE `Teacher_Code`='$tcode' LIMIT 1";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$dep=strtolower($row['department']);
$query="SELECT subject_code FROM `subject` WHERE `branch`='$dep'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	$sub=strtolower($row['subject_code']);
	if(isset($_GET[$sub]))
	{
		$query="SELECT * FROM `teacher_subject` WHERE teacher_code='$tcode' AND `subject_code`='$sub' LIMIT 1";
		$result2=mysqli_query($con,$query);
		$row2=mysqli_fetch_array($result2);
		if($row2['sno'])
		{
			echo "$sub Already Registered<br>";
		}
		else
		{
            
			$query="INSERT INTO `teacher_subject` (`sno`,`teacher_code`,`subject_code`,`group`,`tlp`) VALUES ('NULL','$tcode','$sub','None','NA')";
			$result3=mysqli_query($con,$query);
			echo "$sub Successfully Registered<br>";
			
		}
	}
}
    header("Location:/project_teach_stu/");   
?>