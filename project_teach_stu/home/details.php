<?php
include '../php/connect.php';
if(isset($_POST['tcode']) && isset($_POST['department']))
{
	$dep=$_POST['department'];
	if($dep!='0')
	{
		$txt="<form id='sub' action='insert_subject.php'><b>Select Your Subjects</b><br><table border='0' style='text-align:left'>";
		$query="SELECT * FROM `subject` WHERE branch='$dep'";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result))
		{
			$scode=$row['subject_code'];
			$sname=$row['subject_name'];
			$txt.="<tr><th><input type='checkbox' name='$scode'>$sname</th></tr>";
		}
		$txt.="</table><button class=myButton>Submit</button></form>";
		echo $txt;
		$tcode=$_POST['tcode'];
		$query="UPDATE `teacher_info` SET `department`='$dep' WHERE `Teacher_Code`='$tcode'";
		mysqli_query($con,$query);
	}
	else
		echo "err";
}
?>