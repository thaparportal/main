<?php
session_start();
include_once '../php/connect.php';
if (isset($_SESSION['roll_number'])) {
    if($_SESSION['verify']==1)
    {
    header("Location:../homestudent");   
    }
    $r=$_SESSION['roll_number'];
    $roll_number=$_SESSION['roll_number'];
   
$query  = "select name from `student_info` where roll_number='$roll_number'";
    $result = mysqli_query($con, $query);
    $name   = '';
    while ($r = mysqli_fetch_array($result)) {
        $name = $r['name'];
    }
     $query  = "select * from `student_subject` where roll_number='$roll_number' group by `subject_code`  ";
    $result = mysqli_query($con, $query);
	
include_once '../php/functions.php';

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
						<a href="home_t.php"><i class="fa fa-fw fa-home"></i></a>
						<a href="faq.php"><i class="fa fa-fw fa-question-circle"></i></a>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i></a></div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			<div class="content-wrap">
				<div class="content">
					<header class="c-header">
						
						<h1>Subject List</h1>
						<table>
					<thead>
						<tr>
							<th>Subject Code</th>
							<th>Subject Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
    while ($r = mysqli_fetch_array($result)) {
        
        $scode1     = strtolower($r['subject_code']);
        $query      = "select * from `subject` where subject_code='$scode1' ";
        $result_sub = mysqli_query($con, $query);
        $r_sub      = mysqli_fetch_array($result_sub);
    
        $sname1     = $r_sub[2];
        
        echo "<tr><td id='scode'>$scode1</td><td id='sname'>$sname1</td></tr>";
    }
    echo "<div id=addrow></div>";
?>
					</tbody>
				</table>
					</header>
					<div id='message' style="position:relative; left:29%";><?php
    if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
?></div>
       
<div id="show_form" style="display: inline;">
<form id="add_subject" method="post" action="student_addsubject.php">
    <select style="position:relative; left:15%;width=20px;"class='myButton' name="scode" >
	
	
  						<option value="">Select Subject</option>
  						<?php
    $query  = "select * from `subject`  order by `subject_code`  ";
    $result = mysqli_query($con, $query);
    while ($b = mysqli_fetch_array($result)) {
        $scode = $b['subject_code'];
        $sname = $b['subject_name'];
        $scode1=$scode.','.$sname;
        echo "<option value='$scode'>$scode1</option>";
        $scode1='';
    }
?>
						</select>
	?>
     <input class="myButton" type="submit" id='addsubject' style="position:relative; left:20%;" value="Addsubject">

    </form>
    </div>
					<br><br>
					<form action="student_delete_sub.php" method="post" id="deleteSubject" onsubmit="return confirm('Are You Sure You Want To delete ,This can NOT be undone');" name="deleteSubject"  enctype="multipart/form-data">
						<select style="position:relative; left:12%;width=20px;"class='myButton' name="scode">
  						<option value="">Select Subject</option>
  						<?php
    $query  = "select * from `student_subject` where roll_number='$roll_number' group by `subject_code`  ";
    $result = mysqli_query($con, $query);
    $rowcount=mysqli_num_rows($result);
        while ($b = mysqli_fetch_array($result)) {
        $scode = $b['subject_code'];
        echo "<option value='$scode'>$scode</option>";
        
            }


?>
						</select>
					
			<input class="myButton" id="submit" name="submit" type='submit' style="position:relative; left:15%;" value="Delete Subject">
					</form>
					<form action="home_cnfrm.php" onsubmit="return confirm('After Submission  ,This is no second chance to update subjects');">
                    
     <input class="myButton" type="submit" name='submit' id='submit' style="position:relative; left:20%;" value="Final Submission ">

    
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
</html >
    
    
    
 <?php
}
else
{
    header("Location:/project_teach_stu/index.php");   
}
?>
