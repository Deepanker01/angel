<?php
session_start();
if(isset($_POST['username'])&& isset($_POST['password']))
{
@$b = $_POST['username'];
@$c = $_POST['password'];
$f=md5($c);
$_SESSION['username'] = $b;

require "conn.php";

$sql2 = "SELECT status from teacher where username = '$b'";
$res = mysql_query($sql2);
while($row2 = mysql_fetch_array($res))
{
	$new = $row2['status'];
}
$sql = "SELECT username FROM teacher where password = '$f'";
$result = mysql_query($sql);
$c1=NULL;
while($row= mysql_fetch_array($result))
{
 $c1 = $row['username'];
 

if($c1==NULL)
{
	$msg = "No Such Username Found";
 }


else if(!strcmp($b,$c1))
{
if($new==1)
echo "<script> window.location = 'index2T.php'; </script>";
else
echo "<script> window.location = 'indexnew.php'; </script>";	
}
else
$msg = "Invalid Credentials";
}
$msg= "Invalid Credentials";
}
?>	    
<!DOCTYPE HTML>

<html>
	<head>
		<title>Faculty Availability</title>
		<meta charset="utf-8" />

<link href="form/style.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<script type="text/javascript">
function ajaxFunction()
{
var xmlHttp;
try
{
// Firefox, Opera 8.0+, Safari
xmlHttp=new XMLHttpRequest();
}
catch (e)
{
// Internet Explorer
try
{
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)
{
try
{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
alert("Your browser does not support AJAX!");
return false;
}
}
}
xmlHttp.onreadystatechange=function()
{
if(xmlHttp.readyState==4)
{
document.myForm.time.value=xmlHttp.responseText;
}
}
xmlHttp.open("GET","LogoutT.php",true);
xmlHttp.send(null);
}
</script>



	<script>
	function validate()
	{
	var a=document.forms["myform"]["reg"].value;
	var b=document.forms["myform"]["password"].value;
	
	if(a==""||b=="")
	{
	
	alert("please fill all details.");
	return false;
	}
	
	
	}
	</script>
	<body onunload="ajaxFunction()">
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" id="logo">SITE-vit</a></h1>
							<nav id="nav">
								<a href="index.php" class="current-page-item">Homepage</a>
								
							</nav>
							
						</header>
					
					</div>
				</div>
			</div>
		</div>

		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="4u">
						</div>
					<div class="4u">
						
						<section>
							<h2>Teacher Login</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>
	<form action="index.php" method="POST" name="myform" onsubmit=" return validate();">
		<fieldset>
			<p id="p1">Username: </p>
			<input type="text" name="username" id="reg" placeholder="Enter your Username" required = "true"/>
			
			<p id="p1">Password: </p>
			<input type="password" id="password" name="password" placeholder="Enter your password"  required = "true"/>
			
			<input type="submit" value="submit"  />
			<br>
<?php 
		if(isset($msg))
			echo "<br>" . "<p align='Center' style='color:red; weight:bold'>".$msg."</p>" . "<br>";
	?>				
			
		</fieldset>
	</form>
</div>
						</section>
					
					</div>
					<div class="4u">
					
						<section id ="newsec">
							<h2>About this System</h2>
							<div>
								<div class="row">

                                <p>This portal allows you to search for any particular faculty availabilty in his/her cabin at that time. Once you are registerd, you can search for any faculty through the forum to check her cabin availablity status rather than disturbing them on phone or taking the pain of going to the cabin to check .</p> 
								</div>
								
					<img src = "site.jpg" id="siteapp" >								
							</div>
						</section>

					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
						<section>
							<h2> About Site Vit</h2>
							<p>The School of Information Technology & Engineering (SITE) emphasizes the fields of Information Technology, Software Engineering and Computer Applications. The prime focus is to promote the effective integration of technology with state-of-the-art facilities in teaching and research activities. The curriculum of various programmes offered by the School focuses on problem solving, design, development and application of various emerging technologies. Research programmes aim to establish a strong component of practical engagement with enterprises. The School has a strong Industry-Institute relationship.

The School offers M.Tech [IT], M.Tech [Software Technology], MS [Software Engineering], MCA, B.Tech [IT], BCA and B.Sc [Multimedia and Animation] apart from M.S (by research), and Ph.D programme. In addition, the school offers M.Tech [Software Development & Management], and MS [IT], specialized programmes for employees of Cognizant Technology Solutions and Wipro Limited respectively. The programmes are designed to cater to the ever-changing needs and demands of the IT industry.

The School aims to provide the best Information and Communication Technology (ICT)-based solutions and value-added services. The School has 160 committed faculty members, apart from many visiting professors and distinguished professionals from the Industries and Academia. The placement record of the school is always impressive.

To develop core competencies and to provide more emphasis on research, the School has the following technical divisions: Networks and Information Security, Software Engineering, Operating Systems, Database Management Systems, Image Processing, Graphics and Vision, High-end Computing and Embedded Systems, Soft Computing, Enterprise & Cloud Computing and Information Systems..</p>
							
						</section>

					</div>
					<div class="6u">
					
						
		
								
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The System is developed by Deepanker Saxena and Aman Pareek for SITE School.</p>
							<footer class="controls">
								<a href="#" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<div id="copyright">
							&copy; SITE-VIT.
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>