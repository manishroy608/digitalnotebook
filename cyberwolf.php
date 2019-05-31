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
blink {
        animation: blinker 0.8s linear infinite;
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
</style>
</head>
<body>

<?php
$auth2=$_SESSION['Email'];
	$query="select * from reg  WHERE Email='$auth2'";
	$result=mysqli_query($conn,$query);
	$rows=mysqli_fetch_assoc($result);
	$filename=$rows['Firstname'];
if(isset($_POST['submit'])){
	$name=$_POST['name'] = $filename;
	$Student_Name=$_POST['Student_Name'];
	$admission_no=$_POST['admission_no'];
	$password=$_POST['password'];
	$subject=$_POST['subject'];
	$subject_name=$_POST['subject_name'];
	$Exam_name=$_POST['Exam_name'];
	$money=$_POST['money'];
	$date=$_POST['date'];

$query="insert into cyberwolf(name,student_name,adm_no,pass,no_sub,name_sub,name_exam,money,date)values('$name','$Student_Name','$admission_no','$password','$subject','$subject_name','$Exam_name','$money','$date')";
$run=mysqli_query($conn,$query);
if($run){echo '<i style="color:#003CFF;font-size:30px;font-family:calibri ;background-color:#00FF4C;">
      Your  are successfully entred plz go to "Track Work Status" for track status. </i> ';}
else{echo"plz enter again".mysqli_error($conn);}}
?>
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
    </header>


    <div id="body" class="width">

		
		<section id="content" class="two-column with-right-sidebar">

	   
	   
	   
	   
	   <div class="container" style="background:rgba(0,0,0,.4);">
			<div class="row main">
				<div class="main-login main-center" style="text-align:center;">
			<div class="" style="background-color: blue;"><h4 style=color:white;><b>Please Fill the required details.</b></h4>
				</div>
				
					<form  method="post" action="">
												
						<p></p>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Student's Name</b></label>
							<div class="cols-sm-10">
								
									
									<input type="text" class="form-control" name="Student_Name" id="item" required="" placeholder="Enter Student's Name"/>
								
							</div>
						</div>
						<p></p>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Student's Admission no</b></label>
							<div class="cols-sm-10">
								
									
									<input type="text" class="form-control" name="admission_no" id="admission no" required="" placeholder="Enter Student's Admission no"/>
								
							</div>
						</div>
						<p></p>
						<p></p>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Student's password</b></label>
							<div class="cols-sm-10">
								
									
									<input type="text" class="form-control" name="password" id="password" required="" placeholder="Enter Student's password"/>
								
							</div>
						</div>
						<p></p>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Total no. of subject</b></label>
							<div class="cols-sm-10">
								
									<input type="text" class="form-control" name="subject" id="suject" required=""  placeholder="Enter  no. of subject"/>
							
							</div>
						</div>
						<p></p>
                      <div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Name of subject with course code</b></label>
							<div class="cols-sm-10">
								
									
									<input type="text" class="form-control" name="subject_name" id="subject name" required="" placeholder="Enter subject with course code"/>
								
							</div>
						</div>
						<p></p>
                      <div class="form-group"><b>Name of Examination</b></label>
							<div class="cols-sm-10">
								
									
									<input type="text" class="form-control" name="Exam_name" id="subject name" required="" placeholder="Enter Examination name"/>
								
							</div>
						</div>
						<p></p>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"><b>Enter total money </b></label>
							<div class="cols-sm-10">
								
									<input type="text" class="form-control" name="money" id="money" required=""  placeholder="Enter total Money"/>
								
							</div>
						</div>
						<p></p>
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


						

						<div class="" style="background-color: blue;">
							<tr style="background-color: blue;"><td><input type="submit" value="submit" class="button" name="submit"></td></tr>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	   
	
	   
	   
		<article class="expanded">

            		<h2>Terms And Conditions Of CyberWolf.Inc</h2>
			<div class="article-info">Posted on <time datetime="2018-sep-01">01 sep</time> by <a href="#" rel="author">ADMIN</a></div>

			
            <p>* Keep it secret Never  revil to Other Person Otherwise You will Responsible Yourself For  Incompletion  of Your  Work.</p>
<p>* There Is Not Any Kind Of Refund Exist Here.</p>

<p>* Refund Will Only Sanction In Case Of Work Not Completed.</p>

<p>* The Rate Is Fixed , We Don’t provide Any Relaxation.</p>

<p>* In Case if you didn't keep it secret  You Will Lose Your Money And Your Work Which Completed Successfully Will Revoked Or Denied.</p>

<p>* you can watch or track on "Track Work Status" page.</p>


        </section>
        
        <aside class="sidebar big-sidebar right-sidebar">
            <ul class="newslist">
            <li>
		<h1><font color="#0021FF">Rate Of Work</font></h1>
			
				<li>
					<p><span class="newslist-date">SEP 01 2018</span>
			                   <h3>CAT Rate <font color="#83FF00"><blink>Released</blink></font></h3>
							   <p>CSE -> 1200 Per Paper (Bcz medical is not accepted)</p>
							   <p>Other -> 1000 Per Paper</p>
							   <p>Your loyality 300 per paper.</p>
							   <p><font color="#FF1100"><b>Note: this is standard rate & this is valid only if your attendence is more than 40% if your attendence is less than 40% then the Rate of work is charged Dynamically.</b></font><p>
							       <h4><font color="#0021FF"><center><b>Dynamic Rate</b></center></font></h4>
							       <p><center>0-10% = Rs 0/paper.loyality 0</center></p>
							       <p><center>10-25% = Rs 0 /paper.loyality 0</center></p>
							       <p><center>30-40% = Rs 0/paper. loyality 0</center></p>
				</li>

<li>
					<p><span class="newslist-date">NOV 01 2018</span>
			                  <h3>ETE Rate</h3></p>
                            <P>END TERM EXAMINATION RATE NOT RELEASED YET.</P>
				</li>
			</ul>
                </li> 
	
            <ul>	
               <li>
                    <h4>Blocklist</h4>
                    <ul class="blocklist">
                        <li><a class="selected" href="cyberwolf.php">HOME</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                        <li><a href="track.php">Track Status Of Work</a></li>
                        <li><a href="admin.php">ADMIN</a></li>
                        
						<li class=""><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
                
               

		
               
                


                <li>
                    <h4><font color="#BCCDD2">SOME USEFUL LINKS</font></h4>
                    <ul>
				<li><a href="http://gu.mastersofterp.in/rfcampusgu/login">RF Campus</a></li>
				<li><a href="http://www.galgotiasuniversity.edu.in/">University website</a></li>
				<li><a href="#">websim </a></li>
				<li><a href="http://lms.galgotiasuniversity.edu.in">LMS-Galgotias University</a></li>
				
			</ul>
                </li>
                
            </ul>
		
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>
            <p>&copy; <a href="cyberwolf.php"> CyberWolf.Inc  2018 </a></p>
    </footer>
</div>

</body>
</html>
<?php }
?>