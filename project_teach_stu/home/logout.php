<?php
	session_start();
	include_once 'connect.php';
	session_destroy();
    header("Location:/project_teach_stu/");   
?>