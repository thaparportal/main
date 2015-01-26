<?php
include_once 'php/connect.php';
include_once 'php/functions.php';
//$qu="select * from student_info where `code`=''";
$res=mysqli_query($con,$qu);
while($r=mysqli_fetch_array($res))
{
	//$code=random_code(30);
	$roll=$r['roll_number'];
	//$q="update student_info set `branch`='coe' where `roll_number`=$roll" ;
	$re=mysqli_query($con,$q);
	echo $q.'<br>';
}
	

?>