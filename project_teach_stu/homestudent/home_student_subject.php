<?php
session_start();
include_once '../php/connect.php';
if (isset($_SESSION['roll_number'])) {
    $roll_number = $_SESSION['roll_number'];
    $query       = "select * from `student_info` where roll_number='$roll_number'";
    $result      = mysqli_query($con, $query);
    $name        = '';
    while ($r = mysqli_fetch_array($result)) {
        $name = $r['name'];
        
         $group = strtolower($r['group']);
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
						<a href="../homestudent/"><i class="fa fa-fw fa-home"></i></a>
						<a href="faq.php"><i class="fa fa-fw fa-question-circle"></i></a>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i></a></div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			<div class="content-wrap">
				<div class="content">
					<header class="c-header">
						
						<h1>Courses</h1>
						<table>
					<thead>
						<tr>
							<th>Subject Code</th>
							<th>Subject Name</th>
                            <th>Teacher Name</th>
                            <th>tlp</th>
						</tr>
					</thead>
					<tbody>
						<?php
    $subjects="SELECT subject_code from `student_subject` where roll_number='$roll_number' order by subject_code ";
    $res=mysqli_query($con, $subjects);
	//echo $subjects.'<br>;';
    $url='subject_assign.php';

	
    while($sub=mysqli_fetch_array($res)){
        $scode=$sub['subject_code'];
         
        $query   = "select subject_name from `subject` where `subject_code`='$scode' ";
      // echo $query.'<br>;';
        $res1     = mysqli_query($con, $query);
        $r1       = mysqli_fetch_array($res1);
        $sname   = $r1['subject_name'];
        
    $query  = "SELECT teacher_code,tlp from `teacher_subject` where `group`='$group' and subject_code='$scode' order by subject_code,tlp ";
    $result = mysqli_query($con, $query);
      //   echo $query.'<br>;';
    while ($r = mysqli_fetch_array($result)) {
        $tcode   = $r['teacher_code'];
        
        $query   = "select name from `teacher_info` where teacher_code='$tcode' ";
        $res1     = mysqli_query($con, $query);
        $r1       = mysqli_fetch_array($res1);
        $tname   = $r1['name'];
      //   echo $query.'<br>;';
        $query   = "select tlp from `teacher_subject` where `teacher_code`='$tcode' and `subject_code`='$scode' and `group`='$group'";
  //  echo $query;
        $res1     = mysqli_query($con, $query);
        while ($r1 = mysqli_fetch_array($res1)) {

        $purpose = $r1['tlp'];
      /* 	if($purpose!='l')
		{
				$url="slides.php";
		}*/
        $scode_link   = "<a href='$url?scode=$scode&tlp=$purpose&tcode=$tcode'>".strtoupper($scode)."</a>";
        $sname_link  ="<a href='$url?scode=$scode&tlp=$purpose&tcode=$tcode'>".ucfirst($sname)."</a>";
        $p_link="<a href='$url?scode=$scode&tlp=$purpose&tcode=$tcode'>".strtoupper($purpose)."</a>";
        $t_link="<a href='$url?scode=$scode&tlp=$purpose&tcode=$tcode'>".ucfirst($tname)."</a>";
		
        echo "<tr><td class='scode'>$scode_link</td><td class='sname'>$sname_link</td><td class='tname'>$t_link</td><td class='purpose'>$p_link</td></tr>";
    $r = mysqli_fetch_array($result);
    }
    }
    }
    echo "<div id=addrow></div>";
    
     
         
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
} else
header("Location:/project_teach_stu/");
?>