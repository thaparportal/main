<?php
if (isset($_POST['submit'])) {
    include_once '../php/connect.php';
    $tcode      = $_POST['tcode'];
    $tcode1     = $tcode;
    $group      = $_POST['group'];
    $scode      = $_POST['scode'];
    $tlp        = $_POST['tlp'];
    $assname    = $_POST['assname'];
    $query      = "select code from `teacher_info` where teacher_code='$tcode'";
    $result     = mysqli_query($con, $query);
    $r          = mysqli_fetch_array($result);
    $code       = $r[0];
    $tcode      = $code . '_' . $tcode;
    $rootdir    = "assignments";
    $target_dir = "$rootdir/$scode/$tcode/$group/$tlp/";
    //foreach (glob("$target_dir.$assname") as $filename) {
    $files1     = scandir($target_dir);
    for ($x = 2; $x < count($files1); $x++) {
        //$files1[$x]=$dir.$files1[$x];
        $info        = explode('.', $files1[$x], 2);
        $target_file = $target_dir . $assname . '.' . $info[1];
        if (file_exists($target_file)) {
            unlink($target_file);
            $flag = 1;
        }
    }
    if ($flag == 1) {
        $msg = "The file " . $assname . " has been deleted and ";
    }
    $query  = "DELETE FROM `assignment_questions` WHERE `teacher_code` ='$tcode1' AND `group` = '$group' AND `subject-code` = '$scode' AND `assignment_name` = '$assname'";
    $result = mysqli_query($con, $query);
    $msg    = $msg . 'Removed From DataBase';
    //echo $msg;
}
header("Location:upload_group.php?group=$group&scode=$scode&tlp=$tlp&msg=$msg");
?>