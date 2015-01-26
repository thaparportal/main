<?php
session_start();
include_once '../php/connect.php';
if (isset($_SESSION['teacher_code'])) {
    $tcode  = $_SESSION['teacher_code'];
    $query  = "select name from `teacher_info` where teacher_code='$tcode'";
    $result = mysqli_query($con, $query);
    $name   = '';
    while ($r = mysqli_fetch_array($result)) {
        $name = $r['name'];
    }
    if(isset($_GET['message']))
    {
    	$message=$_GET['message'];
    	$group=strtolower($_GET['group']);
    	$tlp=strtolower($_GET['tlp']);
		if(isset($_GET['subject_code']))
			$scode=strtolower($_GET['subject_code']);			
    	$query = "INSERT INTO `notifications` (`id`, `groups`, `tlp`, `message`, `time`,`from`,`subject_code`) VALUES ('NULL', '$group', '$tlp', '$message', CURRENT_TIMESTAMP,'$tcode','');";
    	$result=mysqli_query($con,$query);
    	if($result)
    	{	//echo "SUCCESS";
    		//mail(ALL $group students who take tlp with $name);
    		$groups=explode(',',$group);
    		$headers = "MIME-Version: 1.0\r\n";
		    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "From: abc@xyz.com";
    		foreach ($groups as $key => $value) 
    		{
    			$query="SELECT `email` FROM `student_info1` WHERE `groups`='$value'";
    			$result=mysqli_query($con,$query);
    			while($row=mysqli_fetch_array($result))
    			{
    				$to=$row['email'];
    				$subject="$value:$tlp";
    				$text="";
    				mail($to, $subject, $message, $headers);
    			}
    		}
    	  	$msg="<script>alert(\"Your message has been succesfully posted\");window.close();</script>";
			echo $msg;
    	}	
    	else
    	{	//echo "FAILURE";
    		$msg="<script>alert(\"Unable to post message. Please try again later.\");window.close();</script>";
			echo $msg;	
    	}
    }
}
else
{
	$msg="<script>alert(\"Session Timeout. Please login again\");window.close();</script>";
	echo $msg;
}
?>
<html>
<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="author" content="niteshh" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/menu_cornermorph.css" />
        <link rel="stylesheet" type="text/css" href="css/normalize_table.css" />
        <link rel="stylesheet" type="text/css" href="css/demo_table.css" />
        <link rel="stylesheet" type="text/css" href="css/component_table.css" />
	<title>Send message to <?php echo $_GET['group']?></title>
</head>
<body style="background-color:#b4bad2">
	<center><br><b>Enter your message here</b><br><br>
	<form id="msg">
		<input name="group" value="<?php echo $_GET['group']?>">
		<input name="tlp" maxlength="1" value="<?php echo $_GET['tlp']?>">
		<textarea id="mesg" rows="10" cols="40" name="message">
		</textarea><br><br>
		<script type="text/javascript">
		//document.getElementById('mesg').val="";
		</script>
		<button class="myButton">Submit</button>
	</form></center>
</body>
</html>