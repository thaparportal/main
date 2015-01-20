<?php
session_start();
include_once '../php/connect.php';
if(isset($_SESSION['teacher_code']))
{
		$tcode=$_SESSION['teacher_code'];
		$query="select name from `teacher_info` where teacher_code='$tcode'";
		$result=mysqli_query($con,$query);
		$name='';
		while($r=mysqli_fetch_array($result))
		{
			$name = $r['name'];
		
		}
		$query="select * from `teacher_subject` where teacher_code='$tcode' group by `subject_code`  ";
		$result=mysqli_query($con,$query);
if(isset($_GET['scode']))
	$scode=$_GET['scode'];
$query="select * from `teacher_subject` where teacher_code='$tcode' and subject_code='$scode' order by `tlp`";
//echo $query;
	$result=mysqli_query($con,$query);
$query="select * from `subject` where subject_code='$scode' ";
			$result_sub=mysqli_query($con,$query);
			$r_sub=mysqli_fetch_array($result_sub);				
			$sname=$r_sub[2];

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Welcome - <?php echo $name;?></title>
		<meta name="author" content="nitesh" />
		<link rel="shortcut icon" href="img/<?php echo $tcode.'.jpg';?>">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_cornermorph.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize_table.css" />
		<link rel="stylesheet" type="text/css" href="css/demo_table.css" />
		<link rel="stylesheet" type="text/css" href="css/component_table.css" />
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img height="40px" src="img/<?php echo $_SESSION['teacher_code'].'.jpg';?>" alt="<?php echo $name;?>"/><span><?php echo $name;?></span></div>
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
						
						<h1>Subject List<span><?php echo $scode; echo "   ";echo $sname;?></span></h1>
						<table>
					<thead>
						<tr>
							<th>Group</th>
							<th>T/L/P</th>
						</tr>
					</thead>
					<tbody>
						<?php
	$lecgroup='';	
						while($r=mysqli_fetch_array($result))
		{
							
			$url='subject_students.php';
			$group = strtoupper(htmlentities($r['group']));
			$tlp = strtoupper($r['tlp']);
						
			if($tlp=='l' || $tlp=='L')
			{
			if($lecgroup!='')
				$lecgroup=$lecgroup.','.$group;
			else
				$lecgroup=$group;
					
			}
			else	
			{
				$group1="<a href='upload_group.php?group=$group&scode=$scode&tlp=$tlp'>$group</a>";
			echo "<tr><td class='group'>$group1</td><td class='tlp'>$tlp</td></tr>";
			}
		
		}
	if($lecgroup!='')
	{
	$lecgroup1=strtoupper("<a href='upload_lec.php?scode=$scode&tlp=L'>$lecgroup</a>");
	echo "<tr><td class='group'>$lecgroup1</td><td class='tlp'>L</td></tr>";
	}
						?>
					</tbody>
				</table>
					</header>
						<div id='message' style="position:relative; left:29%";><?php if(isset($_GET['msg'])) { echo $_GET['msg'];}?></div>
       
<div id="show_form" style="display: inline;">
<form id="add_group" method="post" action="addgroup.php">
	<input class='myButton' name="scode" id="scode" value='<?php echo $scode?>' type="text" hidden>
	<input class='myButton' name="scode" id="scode" value='<?php echo $scode?>' type="text" hidden>
    <input class='myButton'style="position:relative; left:15%;" name="group" id="group" placeholder='Group' type="text" required>
	<input class='myButton' style="position:relative; left:15%;" name="tlp" placeholder='T/L/P'id="tlp" type="text">
     <input class="myButton" type="submit" id='Add Group' style="position:relative; left:20%;" value="Addsubject">

    </form>
    </div>
					<br><br>
					<form action="delete_class.php" method="post" id="deleteSubject" onsubmit="return confirm('Are You Sure You Want To delete ,All Groups Within Subject Will Be Deleted.This can NOT be undone');" name="deleteSubject"  enctype="multipart/form-data">
						<select style="position:relative; left:12%;width=20px;"class='myButton' name="gtlp">
  						<option value="">Select Group and TLP</option>
  						<?php
						$query="select * from `teacher_subject` where teacher_code='$tcode' and`subject_code`='$scode'  ";
						$result=mysqli_query($con,$query);
						while($b=mysqli_fetch_array($result))
						{	$gp=$b['group'];
						 $ltp=$b['tlp'];
							$gtlp=strtoupper($b['group']).",".strtoupper($b['tlp']);
						echo "<option value='$gtlp'>$gtlp</option>";
						//echo "<input type=text name=group value='$gp' hidden>"; 
						//echo "<input type=text name=tlp value='$ltp' hidden>";
						}		
						?>
						</select>
						<input type=text name=tcode value=<?php echo $tcode ?> hidden>
						<input type=text name=scode value=<?php echo $scode ?> hidden>
			<input class="myButton" id="submit" name="submit" type='submit' style="position:relative; left:15%;" value="Delete Class">
					</form>
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
	header("Location:/index.php");
?>