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
    <title>HOME-DIGITAL NOTEBOOK</title>
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
  <style>blink {
        animation: blinker 1.6s linear infinite;
       }
      @keyframes blinker {  
        50% { opacity: 0; }
       }
       .blink-one {
         animation: blinker-one 1s linear infinite;
       }
       @keyframes blinker-one {  
         0% { opacity: 0; }
       }
       .blink-two {
         animation: blinker-two 1.4s linear infinite;
       }
       @keyframes blinker-two {  
         100% { opacity: 0; }
       }
  img[alt="www.000webhost.com"]{display:none;}</style>

</head>

<body>
   <!-- <audio src="voice/home.mp3" autoplay></audio> -->
 <nav class="navbar navbar-default">
        <div class="container">
              <div class="navbar-header"><a href="home.php"><img src="assets/img/logo3.png" style="float:left;width:200px;height:50px;background-size:contain; position:top;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="cyberwolf.php"><strong><em>Cyberwolf.inc</em></strong></a></li>
                     <li role="presentation"><a href="made.php"><strong><em>Maid</em></strong></a></li>
                     <li role="presentation"><a href="profile.php"><strong><em>profile</em></strong></a></li>
				    <li role="presentation"><a href="entry.php"><strong><em>Make Iteam Entry</em></strong></a></li>
					<li role="presentation"><a href="logout.php"><strong><em><font color="red">Log out</font> </em></strong></a></li>
						<li role="presentation"><a href="preset.php"><strong><em><font color="red">Reset Password</font> </em></strong></a></li>
                </ul>
            </div>
        </div>
    </nav> 
	
<marquee marquee bgcolor=yellow><font color="red"><b>PLEASE ! Take screen shot of payment otherwise you will self responsible for yor money loss.</b></font></marquee>
<marquee marquee bgcolor=#00C8FF direction=right position=center><font color="black"><b>Without Screen shot payment is not valid,taking screen shot is mandatory. </b></font></marquee>
	    				     <?php
	    $pro=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro'";
	$result=mysqli_query($conn,$query);
	?>
    
					    <?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
	<div class="container" align="center" style="background-color:#DFF0D8;">
	    <img src="assets/img/<?php echo $rows['img'];?>"class="img-responsive" style="border-radius:60%"; alt=""  height="auto" width="50" align="center"/>
	    
             <strong><b><font color="#3C763D"><a href="profile.php"><?php echo'Welcome Again !</font><font color="#3C763D">'.' '.$rows['Firstname']; ?></a></font></b></strong> 
             
		</div>
	<?php	}?>
<center><a href="entry.php" class="btn btn-warning" role="button">Make Iteam Entry </a>
<a href="made.php" class="btn btn-primary" role="button">Maid Attendence</a>

<a href="mview.php" class="btn btn-success" role="button">prev mont. Entry </a></center>
<div class="alert alert-danger">
<p><center><font color=red><blink><b>1.SRK has unclear balance of 400 of previous rashan</b></blink></font></center></p>

 </div>

   <!-- <center><iframe style="width:400px; line-height:300px;" src=bill.pdf></iframe></center> -->

	  <p>                                                                                     </p>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<?php
	$query="select * from item  WHERE date between '2018-11-01' AND '2018-12-30' ORDER BY date DESC";
	$result=mysqli_query($conn,$query);
	?>
	<p>                                               </p>
	<div class="table-responsive">
	<table align="center" class="table table-bordered" bordercolor="green" style="width:100%; line-height:100%;"> 
	<tr>
	<th colspan="20" align="center" bgcolor="#00C8FF"><h2><strong><center>Vegetable of <text style="color:#BF0000"><b>NOV & DEC</b></text></center></strong></h2></th>
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
	$query="select * from mitem  WHERE date between '2018-10-01' AND '2018-12-31'";
	$result=mysqli_query($conn,$query);
	?>                                                                                              
	  <div class="table-responsive">
	  <table align="center" class="table table-bordered" bordercolor="green" style="width:100%; line-height:100%;"> 
	<tr>
	<th colspan="6" align="center" bgcolor="#FF00E2"><h2><strong><center>Monthly Rasan of <text style="color:#BF0000"><b>this month</b></text></center></strong></h2></th>
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
	
	 <p>                                                                                              </p>
	 <p>                                                                                              </p>
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