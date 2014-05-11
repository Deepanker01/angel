


<?php

require "conn.php";
//if( ((!empty($_POST['name'])) && (!empty($_POST['username'])) &&(!empty($_POST['pass'])) && (!empty($_POST['cpass'])) && (!empty($_POST['email'])) && (!empty($_POST['phone'])) && (!empty($_POST['address'])) )	
//{
if( isset($_POST['name']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['cpass']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) )
{

$name = $_POST['name'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
echo $address;
//if($pass == $cpass)
//{
$res = mysql_query("INSERT INTO `org` (`id`, `name`, `username`, `password`, `address`, `email`, `phone`) VALUES ('','$name','$username','$pass','$address','$email','$phone')");
if($res)
{
echo "YO";

}
//}
else
echo " PASSWORDS DON'T MATCH";
}


//}

?>

<!DOCTYPE HTML>
<!--
	Minimaxing 3.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Faculty Availability</title>
		<meta charset="utf-8" />

<link href="form/style1.css" rel="stylesheet" type="text/css" media="screen" />
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
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" id="logo"><img src="images/Gethem.png" height="75" width="auto" style=" margin-top:10px;"></a></h1>
							<nav id="nav">
								<a href="index.php" >Homepage</a>
								<a href="register.php" class="current-page-item">Register</a>
								
							
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
							<h2>Employer Registration</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>
	<form action="orgregistration.php" method="POST">
		<fieldset>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name" placeholder="Enter your full name" required="true"/>
			<label for="name">UserName: </label>
			<input type="text" name="username" id="name" placeholder="Enter your full name" required="true"/>
			<label for="reg">Password: </label>
			<input type="password" id="password" name="pass" placeholder="Enter your password"  required = "true"/>
			<label for="reg">Re-Password: </label>
			<input type="password" name="cpass" id="pass" placeholder="Enter your password"  required = "true"/>
			<label for="reg">Address: </label>
			<input type="text" name="address" required = "true"/>
			<label for="reg">Phone: </label>
			<input type="text" name="phone" required = "true"/>
			<label for="reg">Email </label><br>
<br><input type ="email" name="email"> <br>

			

			<input type="submit" value="submit" />
		
<?php 
//		if(isset($msg))
			//echo "<br>" . "<p align='center' style='color:red; weight:bold'>".$msg."</p>" . "<br>";
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
					<img src = "site.jpg" id="siteapp" >								

							</div>
							</div>
						</section>

					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
				<section>
							<h2> About Site Vit</h2>
							<p>The School of Information Technology & Engineering (SITE) emphasizes the fields of Information Technology, Software Engineering and Computer Applications. The prime focus is to promote the effective integration of technology with state-of-the-art facilities in teaching and research activities. The curriculum of various programmes offered by the School focuses on problem solving, design, development and application of various emerging technologies. Research programmes aim to establish a strong component of practical engagement with enterprises. The School has a strong Industry-Institute relationship.

							The School aims to provide the best Information and Communication Technology (ICT)-based solutions and value-added services. The School has 160 committed faculty members, apart from many visiting professors and distinguished professionals from the Industries and Academia. The placement record of the school is always impressive.

	

							
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
