<?php
session_start();
$conn=mysqli_connect("localhost","root","","id3829620_dndb");
if(!isset($_SESSION["Email"])){header("location:login.php");
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
  <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <style>
div.desc {
    padding: 15px;
    text-align: center;
}
div.gallery {
    margin: 5px;
    background: #FF00FF;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
    height: auto;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
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
                    <li role="presentation"><a href="home.php"><strong><em>Home</em></strong></a></li>
				    <li role="presentation"><a href="entry.php"><strong><em>Iteam Entry</em></strong></a></li>
					<li role="presentation"><a href="logout.php"><strong><em><font color="red">Log out</font></em></strong></a></li>
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

<div class="gallery">
<img src="assets/img/images1.png" alt="" style="border-radius:60%"; width="200" height="200">
<div class="desc"><b>Name: kavita <p> Mob: +91 8130200410</p><p>salary: 4200</p></b></div>
</div>	
<?php
$query="select * from atten WHERE date between '2018-08-01' AND '2018-08-30' ORDER BY date DESC";
	$result=mysqli_query($conn,$query);
	?>
	
	<p> 	</p>
 <div class="table-responsive">
     <a href="attendence.php"class="btn btn-warning btn-lg btn-block" role="button"><b>Attendence entry</b></a>
     <p></p>
	<table align="center" class="table table-bordered" bordercolor="green" style="width:100%; line-height:100%;"> 
	<tr>
	<th colspan="20" align="center" bgcolor="#0B26FB"><h2><strong><center>Attendence 
 <text style="color:#BF0000"><b>	<p id="demo"></p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>
</b></text></center></strong></h2> </th>
	</tr>
	<th  bgcolor="#B062FF"> Date  </th>
	<th  bgcolor="#B062FF"> Morning </th>
	<th  bgcolor="#B062FF"> Evening </th>
	
	
	
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
		<td bgcolor="#A1C9ED"><?php	echo date("d.M.Y",strtotime($rows['date']));?></td>
		<td bgcolor="#00FF52"><?php echo $rows['morning'];?></td>
		<td bgcolor="#A1C9ED"><?php echo $rows['evening'];?></td>
		
</tr>
		<?php } ?>
	 </table>	
</div>
	
	
	
	
	
	
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
    	<section class="features">
  <div class="container">  
 <center> <div class="row">
 <div class="col-md-4">
      <div class="row icon-features">
                        <h4>your live location & ip address</h4>
                         <script type="text/javascript" src="//100widgets.com/js_data.php?id=69"; ></script>
                            <p>check any location through ip address. </p>
                        </div>

 </div>
 <div class="col-md-4"> <div class="row icon-features">
     <h4>use this calculator to do calculation.</h4>
 <script type="text/javascript" src="//100widgets.com/js_data.php?id=276"></script>
  <p>you can do any type of calculation here. </p>
 </div>
</div>
 <div class="col-md-4"> <div class="row icon-features">
     <h4>Body Mass Calculator.</h4>
 <script type="text/javascript" id="WolframAlphaScript23e7c025a3214a34463c6b823ed172b8" src="//www.wolframalpha.com/widget/widget.jsp?id=23e7c025a3214a34463c6b823ed172b8&theme=green"></script>
  <p>calculate your weight through height. </p>
 </div>
</div></center>
  </div>
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