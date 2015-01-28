<?php
session_start();
include_once '../php/connect.php';
if(isset($_SESSION['teacher_code']))
{
        $group=strtolower($_GET['group']);
        $tlp=strtolower($_GET['tlp']);
        $scode=($_GET['scode']);
		$tcode=$_SESSION['teacher_code'];
		$query="select name from `teacher_info` where teacher_code='$tcode'";
		$result=mysqli_query($con,$query);
		$name='';
		while($r=mysqli_fetch_array($result))
		{
			$name = $r['name'];
		
		}

$query="select * from `subject` where subject_code='$scode' ";
			$result_sub=mysqli_query($con,$query);
			$r_sub=mysqli_fetch_array($result_sub);				
            $sname=$r_sub['subject_name'];
    
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
						
						<h1>Student List<span><?php echo $scode; echo "   ";echo $sname; echo "  ".strtoupper($tlp);?></span></h1>
						<table>
					<thead>
						<tr>
							<th>Roll Number</th>
							<th>Student Name</th>
							<th>Group</th>
							<th>Score</th>
							<th>Name</th>
                            
						</tr>
					</thead>
					<tbody>
<?php
if($tlp!='l')
{
$query="select * from `student_subject` where `subject_code`='$scode' and `group`='$group'";
    //echo $query;
         $result_sub=mysqli_query($con,$query);
while($r=mysqli_fetch_array($result_sub))
		{			
            $roll_number=$r['roll_number'];
    $qu="select * from `student_info` where `roll_number`=$roll_number";
	$result_s=mysqli_query($con,$qu);
 	$r2=mysqli_fetch_array($result_s);
 	$st_name=$r2['name'];
	$qu="select count(distinct `assignment_number`) from `assignment_solutions` where `roll_number`=$roll_number ";
 	$result_s=mysqli_query($con,$qu);
    $r2=mysqli_fetch_array($result_s);
 	$score=$r2[0];
	$qu="select distinct `assignment_number` from `assignment_solutions` where `roll_number`=$roll_number ";
 	$result_s=mysqli_query($con,$qu);
    $r2=mysqli_fetch_array($result_s);
	$qu="select `assignment_name` from `assignment_questions` where `assignment_number`=$r2[0] ";
	//echo $qu;
 	$result_n=mysqli_query($con,$qu);
    $r3=mysqli_fetch_array($result_n);
	$solve_ass=$r3[0];
    while($r2=mysqli_fetch_array($result_s))
	{
		$qu="select `assignment_name` from `assignment_questions` where `assignment_number`=$r2[0] ";
	 	$result_n=mysqli_query($con,$qu);
		$r3=mysqli_fetch_array($result_n);
		$solve_ass=$solve_ass.','.$r3[0];
	}
echo "<tr><td class='rollnumber'>$roll_number</td><td class='rollnumber'>$st_name</td><td class='rollnumber'>$group</td><td class='score'>$score</td><td class='score'>$solve_ass</td>";
                
        }
    }
    else
    {
		
        $lgroup=explode(",",$group);
        foreach($lgroup as $r1)
        { 
         
        $query="select * from `student_subject` where `subject_code`='$scode' and `group`='$r1'";
       $result_sub=mysqli_query($con,$query);
        
      while($r=mysqli_fetch_array($result_sub))
		{
			$roll_number = $r['roll_number'];
          
           	$qu="select * from `student_info` where `roll_number`=$roll_number";    
 			$result_s=mysqli_query($con,$qu);
		  	$r2=mysqli_fetch_array($result_s);
    		$st_name=$r2['name'];
		  	$qu="select count(distinct `assignment_number`) from `assignment_solutions` where `roll_number`=$roll_number ";
	//echo $qu;
 			$result_s=mysqli_query($con,$qu);
    		$r2=mysqli_fetch_array($result_s);
 			$score=$r2[0];
          
		echo  "<tr><td class='rollnumber'>$roll_number</td><td class='rollnumber'>$st_name</td><td class='rollnumber'>$r1</td><td class='score'>$score</td>";
		$st_name="";
      
 }  
        
        }
    }
    
    
				
?>

					
						
					</tbody>
				</table>
					</header>
						<div id='message' style="position:relative; left:29%";><?php if(isset($_GET['msg'])) { echo $_GET['msg'];}?></div>
       <script type="text/javascript">
       		function message(grp,tlp)
       		{
       			url="send-message.php?group="+grp+"&tlp="+tlp;
       			window.open(url,'_blank','height=350,width=350');
       		}
       </script>>
<div id="show_form" style="display: inline;">

    </div>
					<br><br>
					
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
    header("Location:/project_teach_stu/");   
?>