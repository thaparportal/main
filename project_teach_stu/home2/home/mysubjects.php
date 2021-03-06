<?php
session_start();
include_once '../php/connect.php';
include_once '../php/functions.php';
if (isset($_SESSION['teacher_code'])) {
    $tcode  = $_SESSION['teacher_code'];
    $query  = "select name from `teacher_info` where teacher_code='$tcode'";
    $result = mysqli_query($con, $query);
    $name   = '';
    while ($r = mysqli_fetch_array($result)) {
        $name = $r['name'];
    }
    $query  = "select * from `teacher_subject` where teacher_code='$tcode' group by `subject_code`  ";
    $result = mysqli_query($con, $query);
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
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
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
        $url        = 'subject_groups.php';
        $tcode      = $r['teacher_code'];
        $scode1     = $r['subject_code'];
        $query      = "select * from `subject` where subject_code='$scode1' ";
        $result_sub = mysqli_query($con, $query);
        $r_sub      = mysqli_fetch_array($result_sub);
        //$scode=$scode1;
        $scode      = "<a href='$url?scode=$scode1'>$scode1</a>";
        $sname1     = $r_sub[2];
        $sname      = "<a href='$url?scode=$scode1'>$sname1</a>";
        echo "<tr><td id='scode'>$scode</td><td id='sname'>$sname</td></tr>";
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
<form id="add_subject" method="post" action="addsubject.php">
    <input class='myButton'style="position:relative; left:15%;" name="scode" id="scode" placeholder='Subject Code' type="text" required>
	<input class='myButton' style="position:relative; left:15%;" name="sname" placeholder='Subject Name'id="sname" type="text">
     <input class="myButton" type="submit" id='addsubject' style="position:relative; left:20%;" value="Addsubject">

    </form>
    </div>
					<br><br>
					<form action="delete_sub.php" method="post" id="deleteSubject" onsubmit="return confirm('Are You Sure You Want To delete ,All Groups Within Subject Will Be Deleted.This can NOT be undone');" name="deleteSubject"  enctype="multipart/form-data">
						<select style="position:relative; left:12%;width=20px;"class='myButton' name="scode">
  						<option value="">Select Subject</option>
  						<?php
    $query  = "select * from `teacher_subject` where teacher_code='$tcode' group by `subject_code`  ";
    $result = mysqli_query($con, $query);
    while ($b = mysqli_fetch_array($result)) {
        $scode = $b['subject_code'];
        echo "<option value='$scode'>$scode</option>";
    }
?>
						</select>
						<input type=text name=tcode value=<?php
    echo $tcode;
?> hidden>
			<input class="myButton" id="submit" name="submit" type='submit' style="position:relative; left:15%;" value="Delete Subject">
					</form>
					
					<section class="related">
						<address>Give your feedback at nitesh.ns19@gmail.com <span>Thank you for using this service</span></address>
					</section>
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
			
			<script>
       $('#addsubject').click(function() {
           $('#show_form').toggle();
            if($('#addsubject').val()=="Addsubject")
                $('#addsubject').val("Deletesubject");
            else
                $('#addsubject').val("Addsubject");
       });
							</script>
	</body>
</html>
<?php
} else
    header("Location:/index.php");
?>