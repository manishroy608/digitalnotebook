<?php
session_start();
$conn=mysqli_connect("localhost","root","","id3829620_dndb");
if(!isset($_SESSION["Email"])){header("location:login.php");
}
else{
	?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEM ENTRY-DIGITAL NOTEBOOK</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/user.css">
	<link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
<style>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}
body, html{
   	background:url(assets/img/777544.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}

.main{
 	margin:50px 15px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color:white;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 600px;
    padding: 10px 40px;
	background: rgba(0,0,0,.4);
	    color: white;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #000000;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
</style>
</head>

<body>
    <audio src="voice/entry.mp3" autoplay></audio>
<?php
$auth2=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$auth2'";
	$result=mysqli_query($conn,$query);
	$rows=mysqli_fetch_assoc($result);
	$filename=$rows['Firstname'];
if(isset($_POST['submit'])){
    $yourname=$_POST['yourname'] = $filename;
	$items=$_POST['items'];
	$price=$_POST['price'];
	$date=$_POST['date'];
	$file=$_FILES['file']['name'];
	$tempname=$_FILES['file']['tmp_name'];
	$folder = "assets/img/scrf/".$file;
    move_uploaded_file($tempname,$folder);
$query="insert into item(yourname,items,price,date,scrshot)values('$yourname','$items','$price','$date','$folder')";
$run=mysqli_query($conn,$query);
//if($run){echo '<i style="color:#003CFF;font-size:30px;font-family:calibri ;background-color:#00FF4C;">
 //    Your iteams are entred successfully plz go to home forview entry. </i> ';}
//else{echo"plz enter again".mysqli_error($conn);}

if($run){ echo '<i style="color:#003CFF;font-size:30px;font-family:calibri ;background-color:#00FF4C;">
    Your iteams are entred successfully plz go to home forview entry. </i> '; }
	 else{echo '<i style="color:black;font-size:30px;font-family:calibri ;background-color:red;">plz enter again </i> '.mysqli_error($conn);}
}
?>
 <nav class="navbar navbar-default">
        <div class="container">
              <div class="navbar-header"><a href="home.php"><img src="assets/img/logo3.png" style="float:left;width:200px;height:50px;background-size:contain; position:top;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                  
				   <li role="presentation"><a href="home.php"><strong><em>HOME-visite here to watch your Entry </em></strong></a></li>
				    <li role="presentation"><a href="logout.php"><strong><em><font color="red">Log out</font></em></strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h4 style=color:white;><b><em>Please Enter your Items And Price.</em></b></h4>
				
				
					<form  method="post" action="" enctype="multipart/form-data">
												<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Your Name</b></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										 <?php
	    $auth1=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$auth1'";
	$result=mysqli_query($conn,$query);
	?>
    
					    <?php
	while($rows=mysqli_fetch_assoc($result))
	{ ?>  
									<input type="text" class="form-control" disabled name="yourname" id="name" style="background-color:#83FF00;" required=""  value="<?php $firstname=$rows['Firstname'];  echo htmlentities($firstname); ?> "/>
								</div>
							</div>
						</div><?php } ?>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Items Name</b></label>
							<div class="cols-sm-10">
								
									
									<input type="text" class="form-control" name="items" id="item" required="" placeholder="Enter your items"/>
								
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Total Price</b></label>
							<div class="cols-sm-10">
								
									<input type="text" class="form-control" name="price" id="price" required=""  placeholder="Enter total Price"/>
							
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>ScrShot</b></label>
							<div class="cols-sm-10">
								
									<input type="file" class="form-control" name="file" id="file" required=""  placeholder="Enter total ScrShot"/>
							
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Enter Date</b></label>
							<div class="cols-sm-10">
								
									<input type="date" class="form-control" name="date" id="date" required=""  placeholder="Enter Date"/>
								
							</div>
						</div>
<p id="demo"></p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>


						

						<div class="">
							<tr><td><input type="submit" value="submit" class="btn btn-primary btn-lg" name="submit"></td></tr>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 style=color:black;>Digital Notebook © 2018</h5></div>
                <div class="col-sm-6 social-icons"><a href="https://www.facebook.com/manish.singhania.372"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/deployink"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/deployink/"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>
	<?php
  }
	?>