
<?php
session_start();

include('dbconnection.php');

$fname=$lname=$name=$email=$gender=$password=$cpassword=$contact_no=$course=$dob="";

$fnameerr=$lnameerr=$nameerr=$emailerr=$gendererr=$passworderr=$cpassworderr=$emailalready=$registersuccess=$contact_noerr=$courseerr=$passwderr=$doberr="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {

       if (empty($_POST["fname"])) {
              $fnameerr="firstname is required";
       }
       else{
              $fname=test_input($_POST["fname"]);
       }

	 if (empty($_POST["lname"])) {
              $lnameerr="lastname is required";
       }
       else{
              $lname=test_input($_POST["lname"]);
       }
	 if (empty($_POST["Username"])) {
              $nameerr="username is required";
       }
       else{
              $name=test_input($_POST["Username"]);
       }

       if (empty($_POST["email"])) {
              $emailerr="email is required";
       } else {
              $email=test_input($_POST["email"]);
       }


	if (empty($_POST["dob"])) {
		$doberr="please enter the date of birth";
	}else{
		$dob=test_input($_POST["dob"]);
	}


       if (empty($_POST["contact"])) {
              $contact_noerr="contact number  is required";
       } else {
              $contact_no=test_input($_POST["contact"]);
       }



       if (empty($_POST["course"])) {
              $courseerr="please enter the course to enroll";
       } else {
              $course=test_input($_POST["course"]);
       }

       
       if (empty($_POST["password"])) {
       $passworderr="please enter the strong password";
	} else {
       $password=test_input($_POST["password"]);
	}

if (empty($_POST["cpassword"])) {
       $cpassworderr="reenter the password to confirm";

} else {
        $cpassword=test_input($_POST["cpassword"]);

	 
if ($password!=$cpassword) {
	$passerr="please enter the correct password";
	
}

}



//////////sql part

$sql=mysqli_query($con,"SELECT id from users where email='$email'");
$row=mysqli_num_rows($sql);
if ($row>0) {
	$emailalready="Email id already exist with another account. Please try with other email id";
}else{
	$msg=mysqli_query($con,"INSERT INTO `users`(`email`, `passwd`, `cpasswd`, `username`, `fname`, `lname`, `contact_no`, `course`) VALUES('$email','$password','$cpassword','$name','$fname','$lname','$contact_no','$course')");

if ($msg) {
	 $registersuccess='registered successfully';
}

}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<!DOCTYPE html>
<html>
<head>
<title> SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input class="text " type="text" name="fname" placeholder="firstname" required="" style="margin-bottom:30px" value=""><span><?php echo $fnameerr?></span>
					<input class="text" type="text" name="lname" placeholder="lastname" required="" style="margin-bottom:30px">
					<input class="text" type="text" name="Username" placeholder="Username" required="" style="margin-bottom:30px">
					<input class="text email" type="email" name="email" placeholder="Email" required=""> 
					<input class="text" type="text" name="dob" placeholder="date of birth" required="" style="margin-bottom:30px"> 

   
					<input class="text" type="text" name="contact" placeholder="Contact Number" required=""         style="margin-bottom:30px">         
					<input class="text" type="text" name="course" placeholder="course" required="" style="margin-bottom:30px">
					
					<input class="text" type="password" name="password" placeholder="Password" required="">

					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>

				<div class="alert alert-success">
    <strong> <?php
    echo $passwderr;?></strong>
  </div>
				<div class="alert alert-success">
    <strong> <?php
    echo $registersuccess;?></strong>
  </div>
				<div class="alert alert-warning">
    <strong> <?php
    echo $emailalready;?></strong>
  </div>
				<p>Don't have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
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
	<!-- //main -->


	
</body>
</html>
