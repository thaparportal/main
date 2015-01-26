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
    if (isset($_GET['SCODE'])) {
        $scode      = strtolower($_GET['SCODE']);
        $tlp        = strtolower($_GET['TLP']);
        $query      = "select * from `subject` where subject_code='$scode' ";
        $result_sub = mysqli_query($con, $query);
        $r_sub      = mysqli_fetch_array($result_sub);
        $sname      = $r_sub[2];
        $query      = "select * from `slides` where `teacher_code`='$tcode' and `tlp`='$tlp' ";
        //echo $query;
        $result_sld = mysqli_query($con, $query);
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
            <h1>Subject List<span><?php
    echo $scode;
    echo "   ";
    echo $sname;
    echo "<br>";
    echo $tlp;
?></span></h1>
                        <table>
                    <thead>
                        <tr>
                            <th>Slide</th>
                            <th>Time Given</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
    $lecgroup = '';
    echo "<div class='table'>";
    while ($r = mysqli_fetch_array($result_sld)) {
        $sld_name  = $r["slide_name"];
        $timeg     = $r['time_given'];
        $see       = "See Slide";
        $url1      = 'showslide.php';
        $sld_name1 = "$sld_name" . "<a href='$url1?scode=$scode&tlp=$tlp&sldname=$sld_name&tcode=$tcode'>$see</a>";
        echo "<tr><td id='slide_name'>$sld_name1</td><td id='time given'>$timeg</td>";
    }
    echo "</div>";
?>
                   </tbody>
                </table>
            
                    </header>
            <div id='message' style="position:relative; left:29%";><?php
?></div>
                    <form action="upload_sld.php" method="post" enctype="multipart/form-data">
                        <input type=text name=tcode value=<?php
    echo $tcode;
?> hidden>
                        <input type=text name=scode value=<?php
    echo $scode;
?> hidden>
                        <input type=text name=tlp value=<?php
    echo $tlp;
?> hidden>
                        <input style="position:relative; left:0%;" class="myButton" name="file" type="file" value="Upload Slide">
                        <input class="myButton" type=text name=sldname placeholder="Slide Name" required>
                        <input class="myButton" style="position:relative; left:0%;" name=submit type="submit" value="Upload Slide" required>
                    </form><br>
                    <form action="delete_sld.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are You Sure You Want To delete ,This cannot be undone');">
                        <select style="position:relative; left:12%;width=20px;"class='myButton' name="assname">
                          <option value="">Select Slide</option>
                          <?php
    $result_ass = mysqli_query($con, $query);
    while ($b = mysqli_fetch_array($result_ass)) {
        $ass_name = $b['slide_name'];
        echo "<option value='$ass_name'>$ass_name</option>";
    }
?>
                       </select>
                        <input type=text name=tcode value=<?php
    echo $tcode;
?> hidden>
                        <input type=text name=scode value=<?php
    echo $scode;
?> hidden>
                        <input type=text name=tlp value=<?php
    echo $tlp;
?> hidden>
                        <input class="myButton" type="submit" name="submit" style="position:relative; left:15%;" value="Delete Slide">
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
    header("Location:/project_teach_stu/");   
?>