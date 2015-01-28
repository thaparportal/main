<?php
session_start();
    if(isset($_SESSION['teacher_code']))
    {
    if(isset($_GET['tlp']) and isset($_GET['group']) and isset($_GET['scode']) and isset($_GET['assname']))
	{  
        $tlp=$_GET['tlp'];
        $assname=$_GET['assname'];
        $scode=$_GET['scode'];
        $group=$_GET['group'];
		$dir="../homestudent/solutions/$scode/$group/$tlp/$assname";
        $zip = new ZipArchive;
        echo $dir;
$zip->open($assname.".zip", ZipArchive::CREATE);

// Initialize empty "delete list"
// Create recursive directory iterator
$i=0;
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),RecursiveIteratorIterator::LEAVES_ONLY);
//$files=scandir($dir)
foreach ($files as $name => $file) {
	$i+=1;
    // Get real path for current file
    $filePath = $file->getRealPath();
//echo $filePath.'<br>';
    // Add current file to archive
	if($i>2)
	{
	echo '<br>f='.$filePath.'<br>';
    $zip->addFile($filePath);
	}

}

// Zip archive will be created only after closing object
$zip->close();
  header('Content-Type: application/zip');
  header("Content-Disposition: attachment; filename='$assname.zip'");
  header('Content-Length: ' . filesize($assname));
  readfile($zip);
	}
}
else
{
    header("Location:index.php");
}
 ?>
