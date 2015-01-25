<?php
session_start();
include_once '../php/connect.php';

if (isset($_SESSION['roll_number'])) 
{
    $_SESSION['verify']=1;
    $roll_number=$_SESSION['roll_number'];
    $query="UPDATE `STUDENT_INFO` set verify=1 where roll_number=$roll_number";
    $res= mysqli_query($con, $query);
    header("Location:../homestudent");   
}


else
{
    header("Location:/project_teach_stu/");   
}
?>
