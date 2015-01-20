<?php
	if(isset($_GET['zname']))
	{
		$zipname = $_GET['zname'];
		$dir=$_GET['dir'];
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);

    if ($handle = opendir("$dir")) {
      while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && !strstr($entry,'.php')) {
            $zip->addFile($entry);
        }
      }
      closedir($handle);
    }

    $zip->close();

    header('Content-Type: application/zip');
    header("Content-Disposition: attachment; filename='adcs.zip'");
    header('Content-Length: ' . filesize($zipname));
    header("Location: adcs.zip");
	}
 ?>