<?php
$con=mysqli_connect("localhost","root","");
$query = 'CREATE DATABASE TUCSE';
mysqli_query($con,$query); 
$con=mysqli_connect("localhost","root","","TUCSE");
$query= 'create table teacher_info
(
name varchar(255) primary key,
email varchar(255),
mobile_no varchar(255),
Teacher_Code varchar(10) not null,

)';
mysqli_query($con,$query);
?>

name email mob no code password 