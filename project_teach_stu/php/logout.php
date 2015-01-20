<?php
session_start();
include_once 'connect.php';
session_destroy();
header("Location:../index.php");
?>