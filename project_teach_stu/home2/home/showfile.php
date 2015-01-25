<?php
session_start();
if (isset($_GET['group'])) {
    include_once '../php/connect.php';
    include_once '../php/functions.php';
    $tcode      = $_SESSION['teacher_code'];
    $tcode1     = $tcode;
    $group      = $_GET['group'];
    $scode      = $_GET['scode'];
    $tlp        = $_GET['tlp'];
    $assname    = $_GET['assno'];
    $flag       = 0;
    $query      = "select code from `teacher_info` where teacher_code='$tcode'";
    $result     = mysqli_query($con, $query);
    $r          = mysqli_fetch_array($result);
    $code       = $r[0];
    $tcode      = $code . '_' . $tcode;
    $rootdir    = "assignments";
    $target_dir = "$rootdir/$scode/$tcode/$group/$tlp/";
    //foreach (glob("$target_dir.$assname") as $filename) {
    $files1     = scandir($target_dir);
    //echo $target_dir;
    $tempdir    = "Temp/";
    $name       = random_code(10);
    for ($x = 2; $x < count($files1); $x++) {
        //$files1[$x]=$dir.$files1[$x];
        $info        = explode('.', $files1[$x], 2);
        $target_file = $target_dir . $assname . '.' . $info[1];
        $tempfile    = $tempdir . $name . '.' . $info[1];
        echo $target_file;
        if (file_exists($target_file)) {
            if (file_exists($tempfile))
                unlink($tempfile);
            $flag = copy($target_file, $tempfile);
            $x    = count($files1);
        }
    }
    if ($flag == 1) {
        header("Location:$tempfile");
        exit;
    }
}
//header("Location:upload_group.php?group=$group&scode=$scode&tlp=$tlp&msg=$msg");
?>