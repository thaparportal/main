<?php
include "../php/connect.php";
	// 
	$count=1;
				$now=$_POST['now']+16000;
				//echo $now;
				$group=$_POST['group'];
				$query="SELECT * FROM `notifications` ORDER BY `time` DESC";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					$grp=explode(",",$row['groups']);
					$scode=$row['subject_code'];
					$time=strtotime($row['time']);
					for($i=0;$i<count($grp);$i++)
					{
						if(strtolower($group)==strtolower($grp[$i]) && $now-$time<=172800)
						{
							echo "<tr><td>$count</td><td>".$row['message']."</td><td>".$row['from']."</td><td>".$scode."</td</tr>";
							$count++;
						}
					}
				}
?>