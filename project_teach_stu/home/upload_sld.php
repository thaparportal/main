<?php
if (isset($_POST['submit'])) {
    include_once '../php/connect.php';
    $tcode    = $_POST['tcode'];
    $tcode1   = $tcode;
    $scode    = strtolower($_POST['scode']);
    $tlp      = strtolower($_POST['tlp']);
    $sldname  = $_POST['sldname'];
    $fileName = $_FILES['file']['name'];
    $info     = explode('.', $fileName, 2);
    ///$fileExt=$file_info['extension'];
    $query    = "select code from `teacher_info` where teacher_code='$tcode'";
    $result   = mysqli_query($con, $query);
    $r        = mysqli_fetch_array($result);
    $code     = $r[0];
    echo $code;
    $tcode       = $code . '_' . $tcode;
    $rootdir     = "slides";
    $target_dir  = "$rootdir/$scode/$tcode/$tlp/";
    $target_file = $target_dir . $sldname . '.' . $info[1];
    if (file_exists('slides')) {
        if (file_exists("$rootdir/$scode")) {
            if (file_exists("$rootdir/$scode/$tcode")) {
                if (file_exists("$rootdir/$scode/$tcode/$tlp"))
                    echo 'ok';
                else {
                    echo 'ma-4';
                    mkdir("$rootdir/$scode/$tcode/$tlp");
                }
            } else {
                echo 'ma-2';
                mkdir("$rootdir/$scode/$tcode");
                mkdir("$rootdir/$scode/$tcode/$tlp");
            }
        } else {
            echo 'ma-1';
            mkdir("$rootdir/$scode");
            mkdir("$rootdir/$scode/$tcode");
            mkdir("$rootdir/$scode/$tcode/$tlp");
        }
    } else {
        echo 'ma';
        mkdir("$rootdir");
        mkdir("$rootdir/$scode");
        mkdir("$rootdir/$scode/$tcode");
        mkdir("$rootdir/$scode/$tcode/$tlp");
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
            $tm        = time();
            $curr_time = date('Y-m-d h:i:s', $tm);
            echo 1;
            $query     = "INSERT INTO `slides`(`slide_no`, `teacher_code`,`subject_code`, `slide_name`, `tlp`, `time_given`) VALUES (NULL,'$tcode1','$scode','$sldname','$tlp','$curr_time')";
            echo $query;
            include_once '../php/connect.php';
            //echo $query;
            if($result = mysqli_query($con, $query))
            {
                $note="New slides uploaded";
                $query1="SELECT `group` FROM `teacher_subject` WHERE `teacher_code`='$tcode1' AND `subject_code`='$scode' AND `tlp`='l'";
                $result1=mysqli_query($con,$query1);
                echo $query1;
                while($row1=mysqli_fetch_array($result1))
                {
                    $grp=$row1['group'];
                    $qu = "INSERT INTO `notifications` (`id`, `groups`, `tlp`, `message`, `time`,`from`,`subject_code`) VALUES ('NULL', '$grp', '$tlp', '$note', CURRENT_TIMESTAMP,'$tcode1','$scode');";
                    echo $qu;
                    if($result = mysqli_query($con, $qu))
                    {
                        $msg=1;
                    }
                }
            }
            else
            {
                $msg=2;
                unlink($target_file);
            }
        } 
        else {
            $msg = 2;
        }
    }
    //echo $msg;
    header("Location:UPLOAD_LEC.PHP?SCODE=$scode&TLP=$tlp&msg=$msg");
}
?>