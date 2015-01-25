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
    if (isset($_GET['group'])) {
        $group      = $_GET['group'];
        $scode      = $_GET['scode'];
        $tlp        = $_GET['tlp'];
        $query      = "select * from `subject` where subject_code='$scode' ";
        $result_sub = mysqli_query($con, $query);
        $r_sub      = mysqli_fetch_array($result_sub);
        $sname      = $r_sub[2];
        $query      = "SELECT * FROM `assignment_questions` WHERE `teacher_code`='$tcode' AND `group`='$group' AND `tlp`='$tlp' AND `subject-code`='$scode'";
        //echo $query;
        $result_ass = mysqli_query($con, $query);
        //echo $group.$scode.$tlp;
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
		<meta name="author" content="niteshh" />
		<link rel="shortcut icon" href="img/<?php
    echo $_SESSION['teacher_code'] . '.jpg';
?>">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_cornermorph.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize_table.css" />
		<link rel="stylesheet" type="text/css" href="css/demo_table.css" />
		<link rel="stylesheet" type="text/css" href="css/component_table.css" />
		
		<?php
			if(isset($_GET['msg']))
			{
				$msg=$_GET['msg'];
				switch ($msg) {
						case 1:
							echo message1;
							break;
						case 2:
							echo message2;
							break;
						case 3:
							echo message3;
							break;
						case 4:
							echo message4;
							break;
						default:
							echo message6;
							break;
				}
			}
		?>
	</head>
	<body>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img height="40px" src="img/<?php
    echo $_SESSION['teacher_code'] . '.jpg';
?>" alt="<?php
    echo $name;
?>"/><span><?php
    echo $name;
?></span></div>
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
			<h1>Subject List<span><?php
    echo $scode;
    echo "   ";
    echo $sname;
    echo "<br>";
    echo $group;
    echo "   ";
    echo $tlp;
?></span></h1>
						<table>
					<thead>
						<tr>
							<th>Assignment</th>
							<th>Time Given</th>
							<th>Time of Submissions</th>
						</tr>
					</thead>
					<tbody>
						<?php
    $lecgroup = '';
    echo "<div class='table'>";
    while ($r = mysqli_fetch_array($result_ass)) {
        $ass_name  = $r['assignment_name'];
        $timeg     = $r['time_given'];
        $times     = $r['Last_date'];
        $see       = "See File";
        $url       = 'show_students.php';
        $url1      = 'showfile.php';
        $ass_name1 = "<a href='$url?group=$group&scode=$scode&tlp=$tlp&assno=$ass_name'>$ass_name</a>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "
			<a href='$url1?group=$group&scode=$scode&tlp=$tlp&assno=$ass_name'>$see</a>";
        echo "<tr><td id='assignment_name'>$ass_name1</td><td id='time given'>$timeg</td><td id='time submit'>$times</td></tr>";
    }
    echo "</div>";
?>
					</tbody>
				</table>
			
					</header>
			<div id='message' style="position:relative; left:29%";><?php
        //("Location:upload_group.php?group=$group&scode=$scode&tlp=$tlp");
    
?></div>
					<form action="upload_ass.php" method="post" enctype="multipart/form-data">
						<input type=text name=tcode value=<?php
    echo $tcode;
?> hidden>
						<input type=text name=group value=<?php
    echo $group;
?> hidden>
						<input type=text name=scode value=<?php
    echo $scode;
?> hidden>
						<input type=text name=tlp value=<?php
    echo $tlp;
?> hidden>
						<input style="position:relative; left:0%;" class="myButton" name="file" type="file" value="Upload Assignment">
						<input class="myButton" type=text name=assname placeholder="Assgnment Name" required>
						<?php
    $tm        = time();
    $curr_time = date('Y-m-d 00:00:00', $tm + 86400);
?>
						<input class="myButton" type=text name=times value='<?php
    echo $curr_time;
?>' placeholder="Date and Time of Submission" required>
						<input class="myButton" style="position:relative; left:0%;" name=submit type="submit" value="Upload Assignment" required>
					</form><br>
					<form action="delete_ass.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are You Sure You Want To delete ,This cannot be undone');">
						<select style="position:relative; left:12%;width=20px;"class='myButton' name="assname">
  						<option value="">Select Assignment</option>
  						<?php
    $result_ass = mysqli_query($con, $query);
    while ($b = mysqli_fetch_array($result_ass)) {
        $ass_name = $b[4];
        echo "<option value='$ass_name'>$ass_name</option>";
    }
?>
						</select>
						<input type=text name=tcode value=<?php
    echo $tcode;
?> hidden>
						<input type=text name=group value=<?php
    echo $group;
?> hidden>
						<input type=text name=scode value=<?php
    echo $scode;
?> hidden>
						<input type=text name=tlp value=<?php
    echo $tlp;
?> hidden>
						<input class="myButton" type="submit" name="submit" style="position:relative; left:15%;" value="Delete Assignment">
					</form>>
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
    header("Location:/index.php");
?>