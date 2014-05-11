<?php


require "conn.php";
if((!empty($_POST['name'])) && (!empty($_POST['username'])) &&(!empty($_POST['pass'])) &&(!empty($_POST['cpass'])) &&(!empty($_POST['age'])) &&(!empty($_POST['phno'])) && (!empty($_POST['loc1'])) && (!empty($_POST['adhaar'])))
{

if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['cpass']) && isset($_POST['age']) && isset($_POST['phno']) && isset($_POST['loc1']) && isset($_POST['adhaar']) )

{

$name = $_POST['name'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$age = $_POST['age'];
$phone = $_POST['phno'];
$loc1 = $_POST['loc1'];
$loc2 = $_POST['loc2'];
$adhaar = $_POST['adhaar'];
$lan = $_POST['l'];
$p = NULL;

foreach ($lan as $l ) {
$p = $p . " ".$l ;	
}
$cat = $_POST['cat'];
$res = mysql_query("INSERT INTO `user`(`id`, `name`, `username`, `password`, `age`, `phone`, `languages`, `loc1`, `loc2`, `aadhar`, `cat`) VALUES ('','$name','$username','$pass','$age','$phone','$p', '$loc1','$loc2','$adhaar', '$cat')");

if($res)
{

	echo "Hello";
}

}


}
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
							<h2>Employee Registration</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>
	<form action="user_regis.php" method="POST">
		<fieldset>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name" placeholder="Enter your full name" required="true"/>
			<label for="name">UserName: </label>
			<input type="text" name="username" id="name" placeholder="Enter your full name" required="true"/>
			<label for="reg">Password: </label>
			<input type="password" id="password" name="pass" placeholder="Enter your password"  required = "true"/>
			<label for="reg">Re-Password: </label>
			<input type="password" name="cpass" id="pass" placeholder="Enter your password"  required = "true"/>
			<label for="reg">Age: </label>
			<input type="text" name="age" required = "true"/>
			<label for="reg">Phone: </label>
			<input type="text" name="phno" required = "true"/>
			<label for="reg">Language: </label><br>
<br><input type ="checkbox" value = "English" name="l[]"> ENGLISH <br>
<input type ="checkbox" value = "Hindi" name="l[]"> HINDI <br>
<input type ="checkbox" value = "Telugu" name="l[]"> TELGU <br>
<input type ="checkbox" value = "Tamil" name="l[]"> TAMIL <br>
<input type ="checkbox" value = "Punjabi" name="l[]"> PUNJABI <br>

			
			
			<label for="reg">Location1: </label>
			<input type="text" name="loc1" required = "true"/>
			<label for="reg">Location2: </label>
			<input type="text" name="loc2" required = "true"/>
			<label for="reg">Adhar Card No: </label>
			<input type="text" name="adhaar" required = "true"/>
			<label for="reg">Category: </label>
			<select name = "cat">
<option value="babysitter"> Baby Sitter </option>
<option value="Sweeper"> Sweeper </option>
<option value="Dance_Teacher"> Dance Teacher </option>
<option value="House_Keepers"> House Keepers </option>
<option value="Cook"> Cook </option>
<option value="Drivers"> Drivers </option>
<option value="Guards"> Guards </option>
<option value="Maid"> Maid </option>
<option value="Inhouse_Worker"> Inhouse Worker </option>

</select>

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

                                   <p>Gethem basically connects the unskilled labor class to the local people and companies who are in need of such class of workers. The app tries to bridge the gap between the people who are in need of the job but don’t have the required resources or means to approach for job or get hired.
Gethem also targets the local household who are in need of workers for some reasons/ work or the other and hence providing mutual benefits to the employee and the employer too.</p>
					<img src = "site.jpg" id="siteapp" >								

							</div>
							</div>
						</section>

					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
				<section>
							<h2> How it works !</h2>
							 <p>Gethem basically connects the unskilled labor class to the local people and companies who are in need of such class of workers. The app tries to bridge the gap between the people who are in need of the job but don’t have the required resources or means to approach for job or get hired.
Gethem also targets the local household who are in need of workers for some reasons/ work or the other and hence providing mutual benefits to the employee and the employer too.</p>
	

							
						</section>

					</div>
					<div class="6u">
					
						
		
								
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The System is developed by GRAYSLAB team.</p>
							<footer class="controls">
								<a href="#" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<div id="copyright">
							&copy; grayslab
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>










