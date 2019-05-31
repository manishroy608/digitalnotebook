<?php
session_start();
$conn=mysqli_connect("localhost","root","","id3829620_dndb");
if(!isset($_SESSION["Email"])){ header("location:login.php");
}
else{
	?> <html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONTHLY-DIGITAL NOTEBOOK</title>
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

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
             <div class="navbar-header"><a href="home.php"><img src="assets/img/logo3.png" style="float:left;width:200px;height:50px;background-size:contain; position:top;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                   
				    <li role="presentation"><a href="entry.php"><strong><em>Make Iteam Entry</em></strong></a></li>
					<li role="presentation"><a href="logout.php"><strong><em><font color="red">Log out</font> </em></strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
	
	
	<?php
	 
	    $pro=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro'";
	$result=mysqli_query($conn,$query);
	?>
    
					    <?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
	<div class='container' align="center" style="background-color:#DFF0D8;">
	    <img src="assets/img/<?php echo $rows['img'];?>"class="img-responsive" style="border-radius:60%"; alt=""  height="auto" width="50" align="center"/>
	    
             <strong><b><font color="#3C763D"><a href="profile.php"><?php echo'Welcome Again !</font><font color="#3C763D">'.' '.$rows['Firstname']; ?></a></font></b></strong> 
             
		</div>
	<?php	}?>
<a href="home.php" class="btn btn-warning  btn-block" role="button">view This Month Entry </a>

<section>
<div class='alert alert-success'><h3><center>Enter Date For View Previous Details</center></h3>
<center><form method="post" action="">
 <b>From Date:</b><br>
  <input type="date" name="from" value=""><br>
  <b>To Date:</b><br>
  <input type="date" name="to" value=""><br><br>
  <input type="submit" name="submit" value="Submit">
  <input type="reset">
</form></center>
<?php
if(isset($_POST['submit'])){
    $from=$_POST['from'];
	$to=$_POST['to'];
	$query="select * from item  WHERE date between '$from' AND '$to' ORDER BY date DESC";
	$result=mysqli_query($conn,$query);
	echo "<div class='alert alert-success'>
            <center> <strong><b>DATE BETWEEN !</b></strong><font color= 'red'> $from </font>To <font color= 'red'>$to.</font></center>
		</div>";
}
?>
	<p>                                               </p>
	<div class="table-responsive">
	<table align="center" class="table table-bordered" bordercolor="green" style="width:100%; line-height:100%;"> 
	<tr>
	<th colspan="20" align="center" bgcolor="#00C8FF"><h2><strong><center>Vegetable<text style="color:#BF0000"><b> </b></text></center></strong></h2></th>
	</tr>
	
	<th  bgcolor="#B062FF"> Name  </th>
	<th  bgcolor="#B062FF"> Items </th>
	<th  bgcolor="#B062FF"> Price </th>
	<th  bgcolor="#B062FF"> Date  </th>
	<th  bgcolor="#B062FF"> scrshot  </th>
	
	<?php
	
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
		<td bgcolor="#00FF52"><?php echo $rows['yourname'];?></td>
		<td bgcolor="#A1C9ED"><?php echo $rows['items'];?></td>
		<td bgcolor="#FF765C"><?php echo $rows['price'];?></td>
		<td bgcolor="#A1C9ED"><?php	echo date("d M Y",strtotime($rows['date']));?></td>
		<td bgcolor="#FF765C"><a href="<?php echo $rows['scrshot'];?>"><img src="<?php echo $rows['scrshot'];?>"class="img-responsive" style="border-radius:0%"; alt=""  height="30" width="30" align="center"/></a></td>
		</tr>
		<?php } ?>
	 </table>
	 </div>
<?php
if(isset($_POST['submit'])){
    $from=$_POST['from'];
	$to=$_POST['to'];
	$query="select * from mitem  WHERE date between '$from' AND '$to' ORDER BY date DESC";
	$result=mysqli_query($conn,$query);
}
?>
                                                                                             
	  <div class="table-responsive">
	  <table align="center" class="table table-bordered" bordercolor="green" style="width:100%; line-height:100%;"> 
	<tr>

	<th colspan="6" align="center" bgcolor="#FF00E2"><h2><strong><center>Rasan <text style="color:#BF0000"><b> </b></text></center></strong></h2></th>
	</tr>
	
	<th bgcolor="#83FF00"> Name  </th>
	<th bgcolor="#83FF00"> items  </th>
	<th bgcolor="#83FF00"> Price </th>
	<th bgcolor="#83FF00"> Sponsors  </th>
	<th bgcolor="#83FF00"> Date </th>
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
		<td bgcolor="#00C8FF"><?php echo $rows['uname'];?></td>
		<td bgcolor="#A1C9ED"><?php echo $rows['item'];?></td>
		<td bgcolor="#FF765C"><?php echo $rows['price'];?></td>
		<td bgcolor="#FFE740"><?php echo $rows['sponsor'];?></td>
	    <td bgcolor="#B062FF"><?php	echo date("d M Y",strtotime($rows['date']));?></td>
	   </tr>
		<?php } ?>
	<!--	<tr><th bgcolor="#5CFF00"><?php echo 'TOTAL sum'?></th>
		<th bgcolor="#5CFF00"><?php echo ' of Rasan'?></th>
		<th bgcolor="#5CFF00"><?php echo '= 6000'?></th>
		</tr> -->
	 </table>
	 </div>
	
</div>
</section>

  </p>
		<section class="testimonials">
        <h2 class="text-center">Powered By !</h2>
        <h2 class="text-center"><a href="https://deployink.com"><strong>DEPLOYINK.COM</strong></a> </h2>
        <blockquote>
            <p>World's Powerful Web Development Company!</p>
            <footer>For More Information Visite On Our Website.</footer>
        </blockquote>
    </section>
    	
     
    <!--  <center><h1>Weather </h1></center>
            <center> <blockquote><footer>Of Your Live Location</footer></blockquote></center>
     <script type="text/javascript" src="//100widgets.com/js_data.php?id=237"></script>
     -->
	 <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Digital Notebook © 2018</h5></div>
               <div class="col-sm-6 social-icons"><a href="https://www.facebook.com/manish.singhania.372"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/deployink"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/deployink/"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php }
?>