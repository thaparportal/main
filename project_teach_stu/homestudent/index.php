<?php
session_start();
include_once '../php/connect.php';
if (isset($_SESSION['roll_number'])) {
    if($_SESSION['verify']==0)
    {
     header("location:home_s1.php");   
    }
    $roll_number=$_SESSION['roll_number'];
    $query  = "select name from `student_info` where roll_number='$roll_number'";
    $result = mysqli_query($con, $query);
    $name   = '';
    while ($r = mysqli_fetch_array($result)) {
        $name = $r['name'];
    }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Welcome - <?php
    echo $name;
?></title>
		<meta name="author" content="nitesh" />
		<link rel="shortcut icon" href="img/<?php
    echo $_SESSION['roll_number'] . '.jpg';
?>">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_cornermorph.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize_table.css" />
		<link rel="stylesheet" type="text/css" href="css/demo_table.css" />
		<link rel="stylesheet" type="text/css" href="css/component_table.css" />
		<link rel="stylesheet" type="text/css" href="css/notify.css" />
		<script type="text/javascript" src="../js/jquery.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body>
	<div id="black-out"></div>
	<a href="#"><div class="notification-button"><i id="notification-toggle" class="fa fa-info-circle notifications"></i><span>Notification Toggle</span></div></a>
	<div class="notifications-dialog">
		<table>
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Notifications</th>
					<th>From</th>
					<th>Subject</th>
				</tr>
			</thead>
			<tbody id="notification-content">
				<script type="text/javascript">
				function fetchNotifications(Current_Time,Group)
				{
					$.post("fetch-notifications.php",{now:Current_Time,group:Group},function(data){
						$("#notification-content").html(data);
					});
				}
				</script>>
			</tbody>
		</table>
		
	</div>
	<script type="text/javascript">
		$(".notifications-dialog").hide();
		$("#black-out").hide();
		$(".notification-button").click(function(){
			$(".notifications-dialog").fadeToggle(500);
			<?php $ctime=strtotime("now");
			$group=$_SESSION['group'];
			echo "fetchNotifications('$ctime','$group');";
			?>
			$("#notification-toggle").toggleClass('fa-info-circle fa-times');
			$("#black-out").fadeToggle(500);
		});
		$("#black-out").click(function(){
			$(".notifications-dialog").fadeToggle(500);
			$("#notification-toggle").toggleClass('fa-info-circle fa-times');
			$("#black-out").fadeToggle(500);
		});
	</script>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img height="40px" src="img/<?php
    echo $_SESSION['roll_number'] . '.jpg';
?>" alt="<?php
    echo $name;
?>"/><span><?php
    echo $name;
?></span></div>
                    
                    <div class="link-list">
						<a href="home_student_subject.php"><span>My Subjects</span></a>
						<a href="my_score.php"><span>My Score</span></a>
						<a href="personal-settings.php"><span>Personal Settings</span></a>
						<a href="security.php"><span>Security &amp; Privacy</span></a>
					</div>
					<div class="icon-list">
						<a href="home_s.php"><i class="fa fa-fw fa-home"></i></a>
						<a href="faq.php"><i class="fa fa-fw fa-question-circle"></i></a>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i></a>
					</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			<div class="content-wrap">
				<div class="content">
					<header class="c-header">
						
						<h1>Welcome</h1>
						
						<nav class="c-demos">
						
						<a href="home_student_subject.php"><span>My Subjects</span></a>
						<a href="myscore.php"><span>My Score</span></a></br>
                            <a href="personal-settings.php"><span>Personal Settings</span></a>
						<a href="security.php"><span>Security &amp; Privacy</span></a><br>
						<a href="logout.php" style="background: #c94e50; color: #fffce1;" ><span>Logout</span></a>
						</nav>
					</header>
							
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
<?php
} else
    header("Location:/project_teach_stu/");
?>