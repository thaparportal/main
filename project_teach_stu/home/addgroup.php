<?php
session_start();
include_once '../php/connect.php';
if (isset($_POST['group'])) {
    $group = strtolower($_POST['group']);
    $tcode = $_SESSION['teacher_code'];
    $scode = strtolower($_POST['scode']);
    $tlp   = '';
    if (isset($_POST['tlp']))
        $tlp = strtolower($_POST['tlp']);
    $query  = "select * from `teacher_subject` where `teacher_code`='$tcode' and subject_code='$scode'";
    $result = mysqli_query($con, $query);
    $query  = "INSERT INTO `teacher_subject`(`sno`, `teacher_code`, `subject_code`, `group`, `tlp`) VALUES (null,'$tcode','$scode','$group','$tlp')";
    while ($r = mysqli_fetch_array($result)) {
        echo 'in';
        $group = strtolower($group);
        $tlp   = strtolower($tlp);
        echo strtolower($r['group']) . " g" . $group;
        if (strtolower($r['group']) == $group && strtolower($r['tlp']) == $tlp)
            $query = "UPDATE `teacher_subject` SET `group`='$group' ,`tlp`='$tlp' where `group`='$tcode' and `tlp`='$scode' ";
        else if (strtolower($r['group']) == 'none' && strtolower($r['tlp']) == 'na')
            $query = "UPDATE `teacher_subject` SET `group`='$group' ,`tlp`='$tlp' where `group`='none' and `tlp`='na' ";
        else {
            if (strtolower($r['group']) == $group && (strtolower($r['tlp']) == 'na' || strtolower($r['tlp']) == ''))
                $query = "UPDATE `teacher_subject` SET tlp='$tlp' where `teacher_code`='$tcode' and subject_code='$scode' and group='$group'";
            else
                $query = "INSERT INTO `teacher_subject`(`sno`, `teacher_code`, `subject_code`, `group`, `tlp`) VALUES (null,'$tcode','$scode','$group','$tlp')";
        }
    }
    $result_sub = mysqli_query($con, $query);
    echo $query;
}
header("Location:subject_groups.php?scode=$scode");
?>