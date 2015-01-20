<?php
session_start();
if(isset($_GET['scode']))
{
	include_once '../php/connect.php';
	include_once '../php/functions.php';
	$tcode=$_SESSION['teacher_code'];
 	$tcode1=$tcode;
	$scode=$_GET['scode'];
	$tlp=$_GET['tlp'];
	$sldname=$_GET['sldname'];
 	$flag=0;
 	$query="select code from `teacher_info` where teacher_code='$tcode'";
	$result=mysqli_query($con,$query);
 	$r=mysqli_fetch_array($result);				
	$code=$r[0];
  	$tcode=$code.'_'.$tcode;
 	$rootdir="slides";
 	$target_dir = "$rootdir/$scode/$tcode/$tlp/";
 	//foreach (glob("$target_dir.$sldname") as $filename) {
    $files1 = scandir($target_dir);
 	//echo $target_dir;
 	$tempdir="Temp/";
	$name=random_code(10);
for($x=2;$x<count($files1);$x++)
{
	//$files1[$x]=$dir.$files1[$x];
$info = explode ('.',$files1[$x],2);
	$target_file=$target_dir.$sldname.'.'.$info[1];
	$tempfile=$tempdir.$name.'.'.$info[1];;
		echo $target_file;
	if(file_exists($target_file))
		{
		if(file_exists($tempfile))
			unlink($tempfile);
		$flag=copy($target_file,$tempfile);
		$x=	count($files1);	
		}

}
	$tempdir="Temp/";
	 $files2 = scandir($tempdir);
for($x=2;$x<count($files2);$x++)
{
	//$files1[$x]=$dir.$files1[$x];
$info = explode ('.',$files2[$x],2);
	$tempfile1=$tempdir.$info[0].'.'.$info[1];;
		echo $tempfile1."<br>";
	if($tempfile1!=$tempfile)
		{
			unlink($tempfile1);
		}
}

if ($flag==1) {
	header("Location:$tempfile") ; 
    exit;
	}

	
}
//header("Location:upload_group.php?group=$group&scode=$scode&tlp=$tlp&msg=$msg");
?>