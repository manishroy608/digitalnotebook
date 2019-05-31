<?php
session_start();
$conn=mysqli_connect("localhost","root","","id3829620_dndb");
?> <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-DIGITAL NOTEBOOK</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/user.css">
	<link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  	<style>img[alt="www.000webhost.com"]{display:none;}</style>
<style>@CHARSET "UTF-8";
.progress-bar {
    color: #333;
} 


* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

body {
	background: url(assets/img/lg.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #00FFFF;
	background: rgba(0,0,0,.4);
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}</style>

</head>

<body>
   <!-- <audio src="voice/jhlg.mp3" autoplay></audio>
-->
<?php
if(isset($_POST['login'])){
	extract($_POST);
	$query="select * from reg where Email='$email' AND password='$password'";
	$run_query=mysqli_query($conn,$query);
	if($run_query){
		if(mysqli_num_rows($run_query)>0){
			$_SESSION['Email']=$email;
			$_SESSION['password']=$password;
  	echo "<div class='alert alert-success'>
             <strong><b>SUCCESSFULLY !</b></strong> Log in. Plz Choose Given Option To Proceed.
		</div>";
		
		}
		else{
			echo"<div class='alert alert-danger'>
             <strong><b>Warning!</b></strong> WRONG! Email or Password.
		</div>";}
	}	} ?>
	<nav class="navbar navbar-default">
        <div class="container">
             <div class="navbar-header"><a href="index.html"><img src="assets/img/logo3.png" style="float:left;width:200px;height:50px;background-size:contain; position:top;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="regAlert.html"><strong>Register</strong> </a></li>
                </ul>
            </div>
        </div>
    </nav> 
<div align="center">	
	<a href="home.php" class="btn btn-primary" role="button">View Entry</a>
	<a href="entry.php" class="btn btn-success" role="button">Make Entry</a>
	<a href="logout.php" class="btn btn-danger" role="button">Log out</a>
	</div>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="" role="login">
          <img src="assets/img/lgn.gif" class="img-responsive" width="60" height="40" alt="" />
		  
		  
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" required="" />
          
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="login">Log in</button>
          <div>
            <a href="regAlert.html" style="color:#41FF00">Create account</a> Or <a href="preset.php" style="color:yellow"><b>Reset password</b></a>
          </div>
          
        </form>
        
      
      </section>  
      </div>
      
       </div>
  </div> 
	 <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="text-white"><h5>Digital Notebook © 2018</h5></div></p>
                <div class="col-sm-6 social-icons"><a href="https://www.facebook.com/manish.singhania.372"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/deployink"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/deployink/"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>