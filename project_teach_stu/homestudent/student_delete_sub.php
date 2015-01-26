<?php
session_start();

include_once '../php/connect.php';
include_once '../php/functions.php';
if (isset($_POST['submit'])) {
    include_once '../php/connect.php';
   $roll_number  = $_SESSION['roll_number'];
    
        $scode  = strtolower($_POST['scode']);
    $query  = "DELETE FROM `student_subject` WHERE `roll_number` = '$roll_number' AND `subject_code` = '$scode' ";
    $result = mysqli_query($con, $query);
    if ($result == 0)
        $msg = 'Subject Deleted';
    else
        $msg = 'Subject Not deleted';
    //echo $msg;//=$msg.$query;
                
}
header("location:home_s1.php");
?>