<?php
require_once './class.Diff.php';

// compare two files line by line
//$diff = Diff::compareFiles('1.pdf', '2.pdf');
//var_dump($diff);
//echo '<br>';
// compare two files character by character
//$diff = Diff::compareFiles('1.pdf', '2.pdf', true);
xdiff_file_diff('1.pdf', '2.pdf', 'my_script.diff', 2);
//var_dump($diff);
?>