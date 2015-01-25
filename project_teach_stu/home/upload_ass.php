<?php
if (isset($_POST['submit'])) {
    include_once '../php/connect.php';
    $tcode    = $_POST['tcode'];
    $tcode1   = $tcode;
    $group    = $_POST['group'];
    $scode    = $_POST['scode'];
    $tlp      = $_POST['tlp'];
    $times    = $_POST['times'];
    $assname  = $_POST['assname'];
    $fileName = $_FILES['file']['name'];
    $info     = explode('.', $fileName, 2);
    ///$fileExt=$file_info['extension'];
    $query    = "select code from `teacher_info` where teacher_code='$tcode'";
    $result   = mysqli_query($con, $query);
    $r        = mysqli_fetch_array($result);
    $code     = $r[0];
    echo $code;
    $tcode       = $code . '_' . $tcode;
    $rootdir     = "assignments";
    $target_dir  = "$rootdir/$scode/$tcode/$group/$tlp/";
    $target_file = $target_dir . $assname . '.' . $info[1];
    if (file_exists('assignments')) {
        if (file_exists("$rootdir/$scode")) {
            if (file_exists("$rootdir/$scode/$tcode")) {
                if (file_exists("$rootdir/$scode/$tcode/$group")) {
                    if (file_exists("$rootdir/$scode/$tcode/$group/$tlp"))
                        echo 'ok';
                    else {
                        echo 'ma-4';
                        mkdir("$rootdir/$scode/$tcode/$group/$tlp");
                    }
                } else {
                    echo 'ma-3';
                    mkdir("$rootdir/$scode/$tcode/$group");
                    mkdir("$rootdir/$scode/$tcode/$group/$tlp");
                }
            } else {
                echo 'ma-2';
                mkdir("$rootdir/$scode/$tcode");
                mkdir("$rootdir/$scode/$tcode/$group");
                mkdir("$rootdir/$scode/$tcode/$group/$tlp");
            }
        } else {
            echo 'ma-1';
            mkdir("$rootdir/$scode");
            mkdir("$rootdir/$scode/$tcode");
            mkdir("$rootdir/$scode/$tcode/$group");
            mkdir("$rootdir/$scode/$tcode/$group/$tlp");
        }
    } else {
        echo 'ma';
        mkdir("$rootdir");
        mkdir("$rootdir/$scode");
        mkdir("$rootdir/$scode/$tcode");
        mkdir("$rootdir/$scode/$tcode/$group");
        mkdir("$rootdir/$scode/$tcode/$group/$tlp");
    }
    $tmpName   = $_FILES['file']['tmp_name'];
    $fileSize  = $_FILES['file']['size'];
    $fileType  = $_FILES['file']['type'];
    $file_info = pathinfo($_FILES['file']['name']);
    //echo $fileExt;
    $uploadOk  = 1;
    // Check if file already exists
    if (file_exists($target_file)) {
        $msg      = "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file"]["size"] > (8*2048*1024)) {
        $msg      = 4;
        header("Location:upload_group.php?group=$group&scode=$scode&tlp=$tlp&msg=$msg");
        exit;
        $uploadOk = 0;
    }
    /* Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    $msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }*/
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg = 3;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $msg       = "The file " . $assname . " has been uploaded.";
            $tm        = time();
            $curr_time = date('Y-m-d h:i:s', $tm);
            $query     = "INSERT INTO `assignment_questions`(`assignment_number`, `teacher_code`, `group`, `subject-code`, `assignment_name`, `tlp`, `time_given`, `Last_date`) VALUES (NULL,'$tcode1','$group','$scode','$assname','$tlp','$curr_time','$times')";
            include_once '../php/connect.php';
            echo $query;
            if($result = mysqli_query($con, $query))
                $msg=1;
            else
            {
                $msg=2;
                unlink($target_file);
            }
        } else {
            $msg = 2;
        }
    }
    //echo $msg;
    header("Location:upload_group.php?group=$group&scode=$scode&tlp=$tlp&msg=$msg");
}
?>