<?php


include('dbconnection.php');

session_start();
$uname=$password="";
$unameerr=$passworderr=$error=$loginerr="";
 
if (isset($_POST['login'])) {
	
	if (empty($_POST['uname'])) {
		$unameerr="please enter the username or email";
	}else{
		$uname=$_POST['uname'];
	}
	if (empty($_POST['password'])) {
		$passworderr="please enter the password to login";
	}else{
		$password=$_POST['password'];
	}
	$sql=mysqli_query($con,"SELECT * FROM `users` where email='$uname' and passwd='$password'");
	$num=mysqli_fetch_array($sql);
	if ($num>0) {
		$_SESSION['login']=$uname;
		header("location:dashboard.php");

	}else{
		echo "<script>invalid details</script>";
		echo "<script>wlocation.href='login.php'</script>";
	}
}

?>


<!DOCTYPE html> 	
<html>
<head>
<title> LOGIN Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome CSS-->
    <link
      rel="stylesheet"
      href="vendor/font-awesome/css/font-awesome.min.css"
    />
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css" />
    <!-- Google fonts - Muli-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Muli:300,400,700"
    />
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Tweaks for older IEs-->
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative LOGIN Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<input class="text email" type="text" name="uname" placeholder="Email"  value="">
					 <div class="invalid-feedback"><strong><?php echo $unameerr; ?>
                           </strong></div>
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required="" value="">
				 <div class="invalid-feedback"><strong><?php echo $passworderr; ?>
                           </strong></div>
					
					<a href="dashboard.php"><input type="submit" value="LOGIN" name=login></a>
				</form>
				<div class="alert alert-warning">
    <strong> <?php
    echo $error; $passworderr; $unameerr; ?></strong>
  </div>
				<p>Don't have an Account?   <a href="register.php"> SIGNUP Now!</a></p>
				<p>Forget Password?   <a href="changepasswd.php"> Change Now!</a></p>
			</div>
		</div>
		
		<div class="colorlibcopy-agile">
			
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
	<!-- //main -->
</body>
</html>