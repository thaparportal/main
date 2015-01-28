<?php
session_start();
include_once '../php/connect.php';
if (isset($_SESSION['roll_number'])) {
    $rollno = $_SESSION['roll_number'];
    $query  = "select name from `student_info` where roll_number='$rollno'";
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
		<link rel="stylesheet" type="text/css" href="css/component_form.css" />
		
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
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i></a>
					</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			<div class="content-wrap">
				<div class="content">
					<header class="c-header">
						
						<h1 style="color:white;">Personal Settings</h1>
						
						<?php
    $query  = "select * from `student_info` where roll_number='$rollno'";
    $result = mysqli_query($con, $query);
    echo "<form action=# method=post class='per_form' autocomplete='off' onsubmit=\"return confirm('Are You sure you want to update data');\" >";
    $r = mysqli_fetch_array($result);
        $gp=$r['group'];
		$branch=$r['branch'];
		$pass=$r['group'];
		$year=$r['year'];
		$email=$r['email'];
			
        echo "<h2>Group</h2><input type=text name=group value='$gp' width=200px ></input>'<br>";
        echo "<h2>Branch</h2><input type=text name=branch value=$branch></input>'<br>";
        echo "<h2>email</h2><input type=password name=email value=$email></input>'<br>";
		echo "<h2>Year</h2><input type=text name=year value=$year></input>'<br>";
		echo "<input type=submit class=submit value=update >";
    
    echo "</form>";
    $r    = mysqli_fetch_array($result);
    $flag = 0;
    if (isset($_POST['group']) && $_POST['group'] != $r['group']) {
        $new_val = $_POST['group'];
        $query   = "UPDATE `student_info` SET `group`= '$new_val' where roll_number='$rollno'";
        $result  = mysqli_query($con, $query);
        $flag    = 1;
    }
    if (isset($_POST['branch']) && $_POST['branch'] != $r['branch']) {
        $new_val = $_POST['branch'];
        $query   = "UPDATE `student_info` SET `branch`= '$new_val' where roll_number='$rollno'";
        $result  = mysqli_query($con, $query);
        $flag    = 1;
    }
    if (isset($_POST['email'])&& $_POST['email'] != $r['email']) {
        $new_val = $_POST['email'];
        $query   = "UPDATE `student_info` SET `email`= '$new_val' where roll_number='$rollno'";
        $result  = mysqli_query($con, $query);
        $flag    = 1;
    }
    if (isset($_POST['year']) && $_POST['year'] != $r['year']) {
        $new_val = $_POST['year'];
        $query   = "UPDATE `student_info` SET `year`=$new_val where roll_number='$rollno'";
        $result  = mysqli_query($con, $query);
        $flag    = 1;
    }
   
    if ($flag == 1) {
        $flag = 0;
        echo "<script>alert('Successfully Updated')</script>";
        header("Location:personal-settings.php");
    }
    if ($flag == 1)
        echo "<script>alert('Successfully Updated')</script>";
?>
						
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
<?php
} else
    header("Location:/index.php");
?>