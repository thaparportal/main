<?php
include_once '../php/functions.php';
if(isset($_POST['submit']))
{	include_once '../php/connect.php';
	$tcode=$_POST['tcode'];
 	$scode=$_POST['scode'];
 	$gtlp=$_POST['gtlp'];
 	$gtlp_e=explode(',',$gtlp);
 	$tlp=$gtlp_e[1];
 	$group=$gtlp_e[0];;
 $query="DELETE FROM `teacher_subject` WHERE `teacher_code` = '$tcode'AND `subject_code` = '$scode' and `group`='$group' and `tlp`='$tlp'";

 $result=mysqli_query($con,$query);
if($result==0)
 $msg='Not Deleted';

else
 $msg='deleted';
 $msg=$msg.$query;
echo $msg;//=$msg.$query;
}
header("Location:subject_groups.php?msg=$msg&scode=$scode");
?>