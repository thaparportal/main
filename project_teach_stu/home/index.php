<?php
session_start();
include_once "../php/connect.php";
if(isset($_SESSION['teacher_code']))
{
	$tcode=$_SESSION['teacher_code'];
	$query="SELECT name,department FROM `teacher_info` WHERE teacher_code='$tcode' LIMIT 1";
	//echo $query;
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
	$name=$row['name'];
	if($row['department']=="")
	{
		//echo "Enter department";
	}
	else
	{
		header("Location:home_t.php");
	}
}
else
{
	header("Location:../");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Welcome - <?php echo $name;?></title>
		<meta name="author" content="nitesh" />
		<link rel="shortcut icon" href="img/pbh.jpg">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_cornermorph.css" />
		<link rel="stylesheet" type="text/css" href="css/demo_table.css" />
		<script type="text/javascript" src="jquery.js"></script>
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img height="40px" src="img/pbh.jpg" alt="Dr. Parteek Bhatia"/><span>Dr. Parteek Bhatia</span></div>
					<div class="link-list">
						<a href="mystudents.php"><span>My Students</span></a>
						<a href="mysubjects.php"><span>My Subjects</span></a>
						<a href="personal-settings.php"><span>Personal Settings</span></a>
						<a href="security.php"><span>Security &amp; Privacy</span></a>
					</div>
					<div class="icon-list">
						<a href="home_t.php"><i class="fa fa-fw fa-home"></i></a>
						<a href="faq.php"><i class="fa fa-fw fa-question-circle"></i></a>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i></a></div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			<div class="content-wrap">
				<div class="content">
					<header class="c-header">
						
						<h1>Enter your details<span></span></h1>
						<div id="filler1">
							Select Your department
							<select id="dep">
								<option value="0" selected>--Select your department--</option>
								<?php
									$query="SELECT code,name FROM `total_departments`";
									$result=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($result))
									echo "<option value=".$row['code'].">".$row['name']."</option>";
								?>
							</select>
						</div>
						<center><div id="filler2">
						</div></center>
						<script type="text/javascript">
						$("#filler2").hide();
						$("#dep").change(function(){
							dep=$("#dep option:selected").val();
							$.post('details.php',{tcode:"<?php echo $tcode;?>",department:dep},function(data){
								if(data=="err")
								{
									alert("Please select again");
								}
								else
								{
									$("#filler1").hide();
									$("#filler2").show();
									$("#filler2").html(data);
								}
							});
						});
						</script>
					</header>
					<!-- Related demos -->
					<section class="related">
						<address>Give your feedback at nitesh.ns19@gmail.com <span>Thank you for using this service</span></address>
					</section>
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
