<?php
session_start();
include_once '../php/connect.php';
if (isset($_POST['scode'])) {
    $scode = $_POST['scode'];
    $roll_number = $_SESSION['roll_number'];
    
		
    $query  = "INSERT INTO `student_subject`(`sno`, `roll_number`, `subject_code`) VALUES (null,$roll_number,'$scode')";
    $result_sub = mysqli_query($con, $query);
	
    echo $query;
}
header("Location:home_s1.php");
?>