<?php
session_start();
include_once '../php/connect.php';
if (isset($_POST['scode'])) {
    $scode = $_POST['scode'];
    $tcode = $_SESSION['teacher_code'];
    //$sname = '';
    if (isset($_POST['sname']))
	{
		$sname = $_POST['sname'];
		$query = "INSERT INTO `subject`(`s_number`,`subject_code`, `subject_name`) VALUES (null,'$scode','$sname')";
    $result_sub = mysqli_query($con, $query);
		  echo $query;
	}
		
    $query      = "INSERT INTO `teacher_subject`(`sno`, `teacher_code`, `subject_code`, `group`, `tlp`) VALUES (null,'$tcode','$scode','None','NA')";
    $result_sub = mysqli_query($con, $query);
	
    echo $query;
}
header("Location:mysubjects.php");
?>