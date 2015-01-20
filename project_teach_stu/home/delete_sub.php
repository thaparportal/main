<?php
include_once '../php/functions.php';
if (isset($_POST['submit'])) {
    include_once '../php/connect.php';
    $tcode  = $_POST['tcode'];
    $scode  = $_POST['scode'];
    $query  = "DELETE FROM `teacher_subject` WHERE `teacher_code` = '$tcode'AND `subject_code` = '$scode' ";
    $result = mysqli_query($con, $query);
    if ($result == 0)
        $msg = 'Subject Deleted';
    else
        $msg = 'Subject Not deleted';
    //echo $msg;//=$msg.$query;
}
header("Location:mysubjects.php?msg=$msg");
?>