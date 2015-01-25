<?php
session_start();
if (isset($_POST['submit'])) {
    include_once '../php/connect.php';
    $roll=$_SESSION['roll_number'];
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
    $query    = "select code from `student_info` where roll_number='$roll'";
    $result   = mysqli_query($con, $query);
    $r        = mysqli_fetch_array($result);
    $code     = $r[0];
    echo $code;
    $sol       = $roll.'_'.$assname.'_'.$code ;
    $rootdir     = "solutions";
    $target_dir  = "$rootdir/$scode/$group/$tlp/$sol/";
    $target_file = $target_dir . $assname . '.' . $info[1];
    if (file_exists('solutions')) {
        if (file_exists("$rootdir/$scode")) {
            if (file_exists("$rootdir/$scode/$group")) {
                if (file_exists("$rootdir/$scode/$group/$tlp")) {
                    if (file_exists("$rootdir/$scode/$group/$tlp/$sol"))
                        echo 'ok';
                    else {
                        echo 'ma-4';
                        mkdir("$rootdir/$scode/$group/$tlp/$sol");
                    }
                } else {
                    echo 'ma-3';
                    mkdir("$rootdir/$scode/$group/$tlp");
                    mkdir("$rootdir/$scode/$group/$tlp/$sol");
                }
            } else {
                echo 'ma-2';
                mkdir("$rootdir/$scode/$group");
				mkdir("$rootdir/$scode/$group/$tlp");
                
            }
        } else {
            echo 'ma-1';
            mkdir("$rootdir/$scode");
            mkdir("$rootdir/$scode/$group");
            mkdir("$rootdir/$scode/$group/$tlp");
            mkdir("$rootdir/$scode/$group/$tlp/$sol");
        }
    } else {
        echo 'ma';
		mkdir("$rootdir");
       	mkdir("$rootdir/$scode");
       	mkdir("$rootdir/$scode/$group");
       	mkdir("$rootdir/$scode/$group/$tlp");
        mkdir("$rootdir/$scode/$group/$tlp/$sol");
    }
    $tmpName   = $_FILES['file']['tmp_name'];
    $fileSize  = $_FILES['file']['size'];
    $fileType  = $_FILES['file']['type'];
    $file_info = pathinfo($_FILES['file']['name']);
    //echo $fileExt;
    $uploadOk  = 1;
    // Check if file already exists
    if (file_exists($target_file)) {
        //$msg      = "Sorry, file already exists.";
        //$uploadOk = 0;
        $target_file = $target_dir . $assname . mt_rand(0,1000).'.' . $info[1];
    }
    // Check file size
    if ($_FILES["file"]["size"] > (2048*1024)) {
        $msg      = 4;
        $uploadOk = 0;
        echo $msg;
    header("Location:subject_assign.php?tcode=$tcode1&scode=$scode&tlp=$tlp&msg=$msg");exit;
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
            $qu="SELECT `assignment_number`,`Last_date` FROM `assignment_questions` WHERE `teacher_code`='$tcode1' AND `group`='$group' AND `subject-code`='$scode' AND `assignment_name`='$assname' AND `tlp`='$tlp' LIMIT 1";
            $result=mysqli_query($con,$qu);
            if($assname!="")
            {
                
            }
            else
            {
                $msg=2;
                unlink($target_file);
                header("Location:subject_assign.php?tcode=$tcode1&scode=$scode&tlp=$tlp&msg=$msg");
                exit;
            }
            $row=mysqli_fetch_array($result);
            //$date=date("Y-m-d H:i:s",time());
            $now=strtotime("now");
            $limit=$row['Last_date'];
            $limit=strtotime($limit);
            $limit2=$now-$limit+16000;
            if($limit2>0)
            {
                $msg=5;
                //header("Location:subject_assign.php?tcode=$tcode1&scode=$scode&tlp=$tlp&msg=$msg&missed=$limit2");
                exit;
            }
            $query     = "INSERT INTO `assignment_solutions`(`solution_number`, `assignment_number`, `roll_number`) VALUES (NULL,".$row['assignment_number'].",'$roll')";
            //echo "<br>".$query;
            include_once '../php/connect.php';
            //echo $query;
            if($result = mysqli_query($con, $query))
                $msg       = 1;
            else
            {
                $msg=2;
                unlink($target_file);
            }
        } else {
            $msg = 2;
        }
    }
    echo $msg;
    header("Location:subject_assign.php?tcode=$tcode1&scode=$scode&tlp=$tlp&msg=$msg");
}
?>