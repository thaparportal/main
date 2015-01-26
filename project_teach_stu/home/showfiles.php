<?php
session_start();
if ( isset($_GET['tcode']) and isset($_GET['group']) and isset($_GET['tlp']) and isset($_GET['assname']) and isset($_GET['scode']) and isset($_GET['roll_number'])) 
    {
    include_once '../php/connect.php';
    include_once '../php/functions.php';
    $tcode      = $_SESSION['teacher_code'];
    $tcode1     = $tcode;
    $group      = strtolower($_GET['group']);
    $scode      = strtolower($_GET['scode']);
    $tlp        = strtolower($_GET['tlp']);
    $assname    = $_GET['assname'];
    $roll=$_GET['roll_number'];
    $flag       = 0;
    $query    = "select code from `student_info` where roll_number='$roll'";
    $result   = mysqli_query($con, $query);
    $r        = mysqli_fetch_array($result);
    $code     = $r[0];
    $sol       = $assname;
    $rootdir     = "../homestudent/solutions";
    $target_dir  = "$rootdir/$scode/$group/$tlp/$sol/";
    $files1     = scandir($target_dir);
    //echo $target_dir;
    $tempdir    = "Temp/";
    $name       = $roll.'_'.random_code(3);
    for ($x = 2; $x < count($files1); $x++) {
        //$files1[$x]=$dir.$files1[$x];
        $info        = explode('.', $files1[$x], 2);
        $target_file = $target_dir . $roll.'_'.substr($code, 0,3) . '.' . $info[1];
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
    //header("Location:show_students.php?group=$group&scode=$scode&tlp=$tlp&assno=$assname");
}

?>