<?php
session_start();
$conn=mysqli_connect("localhost","root","","id3829620_dndb");
if(!isset($_SESSION["Email"])){ header("location:login.php");
}
else{
	?> 
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE-DIGITAL NOTEBOOK</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/user.css">
	<link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>img[alt="www.000webhost.com"]{display:none;}</style>

<style>
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: auto;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
  
}

</style>
</head>
<body>
   
  <nav class="navbar navbar-default">
        <div class="container">
              <div class="navbar-header"><a href="home.php"><img src="assets/img/logo3.png" style="float:left;width:200px;height:50px;background-size:contain; position:top;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                     <li role="presentation"><a href="made.php"><strong><em>Maid</em></strong></a></li>
                     <li role="presentation"><a href="home.php"><strong><em>Home</em></strong></a></li>
				    <li role="presentation"><a href="entry.php"><strong><em>Make Iteam Entry</em></strong></a></li>
					<li role="presentation"><a href="logout.php"><strong><em><font color="red">Log out</font></em></strong></a></li>
                </ul>
            </div>
        </div>
    </nav> 

<div class='alert alert-success'> 
   
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				     <?php
	    $pro=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro'";
	$result=mysqli_query($conn,$query);
	?>
    
					    <?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
				 	      <img src="assets/img/<?php echo $rows['img'];?>"class="img-responsive" alt=""/>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
				 <tr>
		<td bgcolor="#00FF52"><font color="green"><?php echo $rows['Firstname'];?></font></td>
		<p><td bgcolor="#A1C9ED"><?php echo $rows['Email'];?></td></p>
		
		</td></tr>
		         	 	</div>
					<div class="profile-usertitle-job">
 <tr><td bgcolor="#A1C9ED"><?php echo $rows['class'];?></td></tr>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
						<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#track">
							<i class="glyphicon glyphicon-user"></i>
							Your Work</a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			 
		<?php  $name= $rows['Firstname'];
		$query="select * from item  WHERE yourname= '$name' AND date between '2018-011-01' AND '2018-11-31' ORDER BY date DESC";
	$result=mysqli_query($conn,$query);
	?>
	<p>                                               </p>
	<div class="table-responsive">
	<table align="center" class="table table-bordered" bordercolor="green" style="width:100%; line-height:100%;"> 
	<tr>
	<th colspan="20" align="center" bgcolor="#00C8FF"><h2><strong><center>Entry Done By u<text style="color:#BF0000"><b> </b>this month</text></center></strong></h2></th>
	</tr>
	
	<th  bgcolor="#B062FF"> Name  </th>
	<th  bgcolor="#B062FF"> Items </th>
	<th  bgcolor="#B062FF"> Price </th>
	<th  bgcolor="#B062FF"> Date  </th>
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
		<td bgcolor="#00FF52"><?php echo $rows['yourname'];?></td>
		<td bgcolor="#A1C9ED"><?php echo $rows['items'];?></td>
		<td bgcolor="#FF765C"><?php echo $rows['price'];?></td>
		<td bgcolor="#A1C9ED"><?php	echo date("d M Y",strtotime($rows['date']));?></td>
		</tr>
		<?php } ?>
	 </table>
	 </div><?php } ?>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<p> <a name="tack">
	
	 <?php
		$pro1=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro1'";
	$result=mysqli_query($conn,$query);
	$rows1=mysqli_fetch_assoc($result);
		$emp=$rows1['Firstname'];
		
	$query="select * from cyberwolf  WHERE name='$emp' AND date between '2018-06-01' AND '2018-12-31' ORDER BY date DESC";
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
		<td bgcolor="#A1C9ED"><font color="black"><?php	echo date("d M Y",strtotime($rows['date']));?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['pass'];?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['name_sub'];?></font></td>
		<td bgcolor="#FF765C"><font color="black"><?php echo $rows['name_exam'];?></font></td>
		
		
		</tr>
		<?php } ?>
	 </table>
	 		</div> </a></p>
            </div>

		</div>
	
	</div>

</div>
<center>
<strong><font color="black">Powered by </font><a href="httpS://deployink.com" target="_blank">DEPLOYINK</a></strong>
</center>
<br>
<br>
<footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5><font color="black">Digital Notebook © 2018</font></h5></div>
               <div class="col-sm-6 social-icons"><a href="https://www.facebook.com/manish.singhania.372"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/deployink"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/deployink/"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>
 
</html>
<?php } ?>