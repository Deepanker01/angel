<?php
include "core.php";

include "conn.php";

if(isset($_POST['username'])&&isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password_hash=md5($password);
if(!empty($username)&&!empty($password))
{
$query="SELECT id FROM user WHERE username='$username' AND password='$password'";
if($query_run=mysql_query($query))
{
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==0)
{
echo "<script>";
echo 'alert("invalid username n password")';
echo "</script>";
}
else if($query_num_rows==1)
{
$user_id=mysql_result($query_run,0,'id');
$_SESSION['user_id']=$user_id;
header('Location: imageupload.php');
}
}
echo $_SESSION['user_id'];
}
else
{
echo 'plzz fill properly';
}
}



$id=$_SESSION['user_id'];
$name=@$_FILES['file']['name'];
//echo $size=@$_FILES['file']['size'];
//echo $type=@$_FILES['file']['type'];


$tmp_name=@$_FILES['file']['tmp_name'];

if(isset($name))
{
if(!empty($name))
{
//echo 'OK'; 
if($tmp_name)
{
$location='uploadedimage/';
 
 if(!file_exists($location.$name))
 {
if(@move_uploaded_file($tmp_name,$location.$name))


mysql_query("update `user` set imagepath='".$location.$name."' where id=$id");
echo '<div id="fr">';
echo 'UPLOADED SUCCESSFULLY';
echo '</div>';
}
else
{
//$rand=rand(1,999999);
echo "$id"."<br>";
echo $location.$id.$name;
$q="update `user` set imagepath='".$location.$id.$name."' where id=$id";
mysql_query($q);
if($q)
{
echo "path inserted";
}
}
@move_uploaded_file($tmp_name,$location.$id.$name);
echo "<br>".$location.$id.$name."<br>";
echo "<br>"."image inserted";


$query="update user set status=1 where imagepath='".$location.$id.$name."'";
$r=mysql_query($query);

if($r)
{
echo "status updated";
}


}

}

else
{
echo 'please choose a file ';
}
}

else
{
echo "";
}


?>




<html>
<head>
</head>













<!DOCTYPE HTML>
<html>
	<head>
		<title>Gethem</title>
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
	<script>
	function validate()
	{
	var a=document.forms["myform"]["username"].value;
	var b=document.forms["myform"]["password"].value;
	
	if(a==""||b=="")
	{
	
	alert("Please Fill all the Details.");
	return false;
	}
	
	
	}
	</script>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" id="logo"><img src="images/Gethem.png" height="75" width="auto" style=" margin-top:10px;"></a></h1>
							<nav id="nav">
								<a href="index.php" class="current-page-item">Homepage</a>
								<a href="register.php">Register</a>
								
							
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
							<h2>Employee Verification</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>
	<form action="imageupload.php" method="POST" name="myform" onsubmit=" return validate();">
		<fieldset>
			<p id="p1">Username: </p>
			<input type="text" name="username" id="username" placeholder="Enter your registration number" required="true" />
			
			<p id="p1">Password: </p>
			<input type="password" id="password" name="password" placeholder="Enter your password"  required = "true"/>
			
			<input type="submit" value="submit"  />
			
<?php 
		if(isset($msg))
			echo "<br>" . "<p align='center' style='color:red; weight:bold'>".$msg."</p>" . "<br>";
	?>				
			
		</fieldset>
	</form>
<form action="imageupload.php" method="POST" enctype="multipart/form-data">
<br><br>
<input type="file" name="file" ><br><br>
<input type="submit" value="upload">
</form>
	</div>
						</section>
					
					</div>
					<div class="4u">
					<div id="search">
				<form action="newsearch.html" class="search-wrapper cf">
        <input type="text" placeholder="Search here..." required="">
        <button type="submit">Search</button>
    </form></div>
						<section id ="newsec">
					
							
								<div class="row">

								

						</section>


					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
						<section>
								
							
						</section>

					</div>
					<div class="6u">
					
						
		
								
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The System is developed by GRAYSLAB TEAM  </p>
							<footer class="controls">
								<a href="#" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						

					</div>
				</div>
			</div>
	<div id="copyright">
							&copy; SITE-VIT.
						</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>


