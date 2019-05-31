<?php
session_start();
$conn=mysqli_connect("localhost","root","","id3829620_dndb");
if(!isset($_SESSION["Email"])){ header("location:login.php");
}
else{
	?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CyberWolf</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
<!-- <video autoplay muted loop id="bgvid">
  <source src="assets/img/bj.mp4" type="video/mp4">
</video> -->
<div id="container">

    <header>
	<div class="width">
  
	    	<nav>
	<img src="assets/img/cw.png" style="width:auto;height:100px;background-size:contain; position:top;"><h1><font color="black">CyberWolf.Inc</font></h1>
	
    			<ul>
        	    		<li class=""><a href="cyberwolf.php">HOME</a></li>
						<li class=""><a href="home.php">Digital notebook</a></li>
         	   		<li><a href="track.php">Track Work Status </a></li>
          	  		<li><a href="profile.php">PROFILE</a></li>
          	 
					<li class=""><a href="admin.php">ADMIN</a></li>
					<li class=""><a href="pend.php">Pending Work</a></li>
					<li class=""><a href="logout.php">Logout</a></li>
        		</ul>
	
    		</nav>


       	</div>
		 <?php
	    $pro=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro'";
	$result=mysqli_query($conn,$query);
	?>
    
					    <?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
	<div class="container" align="center" style="background:rgba(0,0,0,.4);">
	    <img src="assets/img/<?php echo $rows['img'];?>"class="img-responsive" style="border-radius:60%"; alt=""  height="auto" width="50" align="center"/>
	    
             <strong><b><font color="#3C763D"><a href="profile.php"><?php echo'Welcome Again !</font><font color="#5FB90F">'.' '.$rows['Firstname']; ?></a></font></b></strong> 
             
		</div>
	
		 <?php	}?>

		<?php
		$pro1=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro1'";
	$result=mysqli_query($conn,$query);
	$rows1=mysqli_fetch_assoc($result);
		$emp=$rows1['Firstname'];
		
	$query="select * from cyberwolf  WHERE name='$emp' AND date between '2018-06-01' AND '2019-12-30' ORDER BY date DESC";
	$result=mysqli_query($conn,$query);
	?>
	
	<p>                                               </p>
	<div class="table-responsive">
	<table align="center" class="table table-bordered" style="width:auto; line-height:100%;"> 
	<tr>
	<th colspan="20" align="center" bgcolor="#00C8FF"><h2><strong><center>Track Here</center></strong></h2></th>
	</tr>
	
	<th  bgcolor="#B062FF"> Name  </th>
	<th  bgcolor="#B062FF"> Admission no </th>
	<th  bgcolor="#B062FF">Status</th>
	<th  bgcolor="#B062FF"> No. of subject  </th>
	<th  bgcolor="#B062FF"> money</th>
	<th  bgcolor="#B062FF"> Date</th>
	<th  bgcolor="#B062FF"> Password</th>
	
	<th  bgcolor="#B062FF"> Subject name  </th>
	<th  bgcolor="#B062FF"> Exam name  </th>
	
	
	
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
		<td bgcolor="#00FF52"><font color="black"><?php echo $rows['student_name'];?></font></td>
		<td bgcolor="#A1C9ED"><font color="black"><?php echo $rows['adm_no'];?></font></td>
		<td bgcolor="#FF765C"><font color="green"><b><?php echo $rows['track'];?></b></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['no_sub'];?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['money'];?></font></td>
		<td bgcolor="#A1C9ED"><font color="black"><?php	echo date("d M Y",strtotime($rows['date']));?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['pass'];?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['name_sub'];?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['name_exam'];?></font></td>
		
		
		</tr>
		<?php } ?>
	 </table>
	 		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<footer>
            <p>&copy; <a href="cyberwolf.php"> CyberWolf.Inc  2018 </a></p>
    </footer>
</div>

</body>
</html>
<?php }
?>