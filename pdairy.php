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
  <style>img[alt="www.000webhost.com"]{display:none;}</style>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="home.php"><i class="material-icons">book</i><strong><em> DIGITAL NOTEBOOK</em></strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                   
				    <li role="presentation"><a href="entry.php"><strong><em>Make Iteam Entry</em></strong></a></li>
					<li role="presentation"><a href="logout.php"><strong><em><font color="red">Log out</font></em></strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
	

	<div class='alert alert-success'>
	    <?php
	    $pro=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$pro'";
	$result=mysqli_query($conn,$query);
	?>
	<?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>
		<tr>
		<td bgcolor="#00FF52"><?php echo $rows['Firstname'];?></td>
		<td bgcolor="#A1C9ED"><?php echo $rows['Email'];?></td>
		
		</tr>
		<?php } ?>
             <strong><b><?php echo'Welcome Again !'.' '.$_SESSION['Email']; ?></b></strong>
		</div> 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<section class="testimonials">
        <h2 class="text-center">Powered By !</h2>
        <h2 class="text-center"><a href="https://deployink.com"><strong>DEPLOYINK.COM</strong></a> </h2>
        <blockquote>
            <p>World's Powerful Web Development Company!</p>
            <footer>For More Information Visite On Our Website.</footer>
        </blockquote>
    </section>
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