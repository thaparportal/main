<?php


include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT mailid,password FROM student_info";
$result = $conn->query($sql);

if ($result->num_rows) {
    echo "into index page ";
    }
} else {
   echo "into login page";
}
$conn->close();
?>

