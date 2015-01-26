<?php
session_start();
include_once '../php/connect.php';
if (isset($_SESSION['roll_number']))
{
    if(isset($_GET['tlp']) and isset($_GET['scode']) and isset($_GET['tcode'])) {
        
    $roll_number = $_SESSION['roll_number'];
    $tlp=strtolower($_GET['tlp']);
    $scode=strtolower($_GET['scode']);
    $tcode=$_GET['tcode'];
    $purpose='';
    $query  = "select name from `teacher_info` where teacher_code='$tcode'";
    $result = mysqli_query($con, $query);
    $tname   = '';
    while ($r = mysqli_fetch_array($result)) {
        $tname = $r['name'];
	}
    if($tlp=='p')
    {
        $purpose='Lab';   
    }
    
    if($tlp=='l')
    {
        $purpose='Lecture';   
    }
    
    if($tlp=='t')
    {
        $purpose='Tut';   
    }
   
    $query       = "select * from `student_info` where roll_number='$roll_number'";
    $result      = mysqli_query($con, $query);
    $name        = '';
    while ($r = mysqli_fetch_array($result)) {
        $name = $r['name']; 
		$group = strtolower($r['group']);
    }
    
    $query   = "select subject_name from `subject` where `subject_code`='$scode' ";
     
        $res1     = mysqli_query($con, $query);
        $r1       = mysqli_fetch_array($res1);
        $sname   = $r1['subject_name'];
    
    
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
    echo $_SESSION['roll_number'] . '.jpg';
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
						case 5:
							if(isset($_GET['missed']))
							{
								echo message5;
								echo $_GET['missed']." seconds</center>";
							}
							else
							{
								echo message6;	
							}
							break;
						default:
							echo message6;
							break;
				}
			}
		?>

		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
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
						<a href="../homestudent/"><i class="fa fa-fw fa-home"></i></a>
						<a href="faq.php"><i class="fa fa-fw fa-question-circle"></i></a>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i></a></div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			<div class="content-wrap">
				<div class="content">
					<header class="c-header">
						
						<h1><span><?php echo $sname.' <span>'.$tname.'   in  '.$purpose; 
                            
                            
                            ?></span></h1>
						
						<?php
	if($tlp!='l')
	{
		?><br><br>
										<form action="upload_sol.php" method="post" enctype="multipart/form-data">
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
    echo $tlp
?> hidden>
											
<input style="position:relative; left:0%;" class="myButton" name="file" type="file" value="Upload Assignment">
<select style="position:relative; left:0%;width=20px;"class='myButton' name="assname">
  						<option value="">Select Assignment</option>
  						<?php
		$assignment="SELECT * from `assignment_questions` where `subject-code`='$scode' and `group`='$group' and tlp='$tlp'";
    	$res=mysqli_query($con,$assignment);
    while($b=mysqli_fetch_array($res))
						{	 $aname=$b['assignment_name'];
						
						echo "<option value='$aname'>$aname</option>";
						//echo "<input type=text name=group value='$gp' hidden>"; 
						//echo "<input type=text name=tlp value='$ltp' hidden>";
						}		
						?>
						</select>
											<?php
    $tm        = time();
    $curr_time = date('Y-m-d 00:00:00', $tm);
?>
<input class="myButton" type=text name=times value='<?php echo $curr_time;?>'  hidden>
						<input class="myButton" style="position:relative; left:0%;" name=submit type="submit" value="Upload Assignment" required>
					</form><br>
						<table>
					<thead>
						<tr>
							<th>Assignment Name</th>
							<th>Given Time</th>
                            <th>Submission Time</th>
                        
						</tr>
					</thead>
					<tbody>
						<?php
    $assignment="SELECT * from `assignment_questions` where `subject-code`='$scode' and `group`='$group' and tlp='$tlp'";
    //echo $assignment;
    $res=mysqli_query($con,$assignment);
    $url='showfile.php';
    while($sub=mysqli_fetch_array($res))
    {   
        $aname=$sub['assignment_name'];
        $gtime=$sub['time_given'];
        $ltime=$sub['Last_date'];
		
        $aname_link= "<a target='_blank' href='$url?group=$group&scode=$scode&tlp=$tlp&tcode=$tcode&assno=$aname'>$aname</a>";
        $gtime_link= "<a target='_blank' href='$url?group=$group&scode=$scode&tlp=$tlp&tcode=$tcode&assno=$aname'>$gtime</a>";
        $ltime_link= "<a target='_blank' href='$url?group=$group&scode=$scode&tlp=$tlp&tcode=$tcode&assno=$aname'>$ltime</a>";
        
        echo "<tr><td class='aname'>$aname_link</td><td class='gtime'>$gtime_link</td><td class='ltime'>$ltime_link</td></tr>";
    }
    
	}
	else
	{?>
						<table>
					<thead>
						<tr>
							<th>Slide Name</th>
							<th>Given Time</th>
                        
						</tr>
					</thead>
					<tbody>
						<?php
		$assignment="SELECT * from `slides` where `subject_code`='$scode' and `teacher_code`='$tcode' and `tlp`='$tlp'";
    //echo $assignment;
    $res=mysqli_query($con,$assignment);
    $url='showfile.php';
    while($sub=mysqli_fetch_array($res))
    {   
        $sname=$sub['slide_name'];
        $gtime=$sub['time_given'];
        $aname_link= "<a target='_blank' href='$url?scode=$scode&tlp=$tlp&tcode=$tcode&sname=$sname'>$sname</a>";
        $gtime_link= "<a target='_blank' href='$url?scode=$scode&tlp=$tlp&tcode=$tcode&sname=$sname'>$gtime</a>";        
        echo "<tr><td class='aname'>$aname_link</td><td class='gtime'>$gtime_link</td>";
    }
    
	}
     
         
?>
                        
                        
					</tbody>
				</table>
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
    }
    else
    {
        header("Location:/project_teach_stu/homestudent/");
    }
} else
  header("Location:/project_teach_stu/");

?>