<?php
session_start();
include_once '../php/connect.php';
if (isset($_POST['scode'])) {
    $scode = strtolower($_POST['scode']);
    $roll_number = $_SESSION['roll_number'];
    $group=($_SESSION['group']);
	$year=$_SESSION['year'];	
    $query  = "INSERT INTO `student_subject`(`sno`, `roll_number`, `subject_code`,`group`,`year`) VALUES (null,$roll_number,'$scode','$group',$year)";
    $result_sub = mysqli_query($con, $query);
	
    echo $query;
}
header("Location:home_s1.php");
?>