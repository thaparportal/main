<?php
session_start();
include_once '../php/connect.php';
if(isset($_SESSION['teacher_code']))
{
        $group=strtolower($_GET['group']);
        $tlp=strtolower($_GET['tlp']);
        $scode=$_GET['scode'];
        $assname=$_GET['assno'];
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
						
						<h1>Submission List of Students<span><?php echo strtoupper($scode); echo "   ";echo $sname; echo "  ".strtoupper($tlp);?></span></h1>
			<h3><a href=<?php echo "'downzip.php?tlp=$tlp&group=$group&scode=$scode&assname=$assname'" ;?>>Download Zip</a></h3>
			
					<table>
					<thead>
						<tr>
							<th>Roll Number</th>
							<th>Student Name</th>
							<th>Group</th>
							<th>Submission Time</th>
							<th>Solution</th>
                            
						</tr>
					</thead>
					<tbody>
<?php
if($tlp!='l')
{
$query="select * from `student_subject` where `subject_code`='$scode' and `group`='$group'";

         $result_sub=mysqli_query($con,$query);
while($r=mysqli_fetch_array($result_sub))
		{			
            $roll_number=$r['roll_number'];
    
    $qu="select * from `student_info` where `roll_number`=$roll_number";
    
 $result_s=mysqli_query($con,$qu);
  
    while($r2=mysqli_fetch_array($result_s))
    $st_name=$r2['name'];
 
$qu="SELECT `assignment_number` FROM `assignment_questions` WHERE `teacher_code`='$tcode' AND `group`='$group' AND `subject-code`='$scode' AND `assignment_name`='$assname' AND `tlp`='$tlp' LIMIT 1";
 $result11=mysqli_query($con,$qu);      
    $rowss=mysqli_fetch_array($result11);
      $assno=$rowss['assignment_number'];
$quer4="select * from `assignment_solutions` where `roll_number`=$roll_number and `assignment_number`=$assno order by `roll_number`,`time_uploaded` limit 1";
	
//echo $quer4;    
 $sol="<a target='_blank' href='showfiles.php?group=$group&scode=$scode&tlp=$tlp&tcode=$tcode&assname=$assname&roll_number=$roll_number'>Solution</a>";
 $result_s4=mysqli_query($con,$quer4);
  while($r4=mysqli_fetch_array($result_s4))
  {$tim=$r4['time_uploaded'];
     echo "<tr><td class='rollnumber'>$roll_number</td><td class='name'>$st_name</td><td class='group'>$group</td><td class='time'>$tim</td><td class='solution'>$sol</td>";
  }
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
          while($r2=mysqli_fetch_array($result_s))
    $st_name=$r2['name'];
          
		echo  "<tr><td class='rollnumber'>$roll_number</td><td class='rollnumber'>$st_name</td><td class='rollnumber'>$r1</td>";
      
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
	header("Location:/index.php");
?>