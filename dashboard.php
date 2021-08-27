

<?php

$selectquery=$row=$results="";
include('dbconnection.php');
session_start();
if (isset($_SESSION['login'])) {
  $selectquery="SELECT *  FROM `users` where email='".$_SESSION['login']."' ";
$results=mysqli_query($con,$selectquery);
if (mysqli_num_rows($results)>0) {
  
}else{
 echo "no details foiund";
}
}else{
  echo  "<script>location.href:'login.php'</script>";

}







?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <!-- Bootstrap CSS-->
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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
  </head>
  <body>


    <header class="header">
     
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar">
            <img
              src="img/profile-pic (8).png"
              alt="..."
              class="img-fluid rounded-circle"
            />
          </div>
          <div class="title">
            <h1 class="h5">Ahmed Raza Idrisi</h1>
            <p> Software Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li>
            <a href="index.html"> <i class="icon-home"></i>Home </a>
          </li>
          <li class="active">
            <a href="dashboard.php"> <i class="icon-grid"></i>Tables </a>
          </li>
          <li>
            <a href="add_course.php"> <i class="fa fa-bar-chart"></i> Add Course </a>
          </li>
          <li>
            <a href="add_subject.php"> <i class="icon-padnote"></i>Add subjects </a>
          </li>
          <li>
            <a href="changepasswd.php"> <i class="bi bi-arrow-clockwise"></i>Forget Password </a>
          </li>
          <li>
           
            <a href="login.php"> <i class="icon-logout"></i>Login page </a>
          </li>
          <li>
           
            <a href="logout.php"> <i class="icon-logout"></i>logout page </a>
          </li>
        </ul>
        
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Profile</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong>Profile Data</strong></div>
                  
                    <table class="table table-striped table-lg">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                          <th>email</th>
                          <th>Contact No</th>
                          <th>course</th>
                          <th>subject1</th>
                          <th>subject2</th>
                          <th>subject3</th>
                          <th>subject4</th>
                          <th>subject5</th>
                          <th>subject6</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($results))
                        {?>

                        

 <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row['fname']?></td>
                          <td><?php echo $row['lname']?></td>
                          <td><?php echo $row['username']?></td>
                          <td><?php echo $row['email']?></td>
                          <td><?php echo $row['contact_no']?></td>
                          <td><?php echo $row['course']?></td>
                          <td><?php echo $row['sub2']?></td>
                          <td><?php echo $row['sub2']?></td>
                          <td><?php echo $row['sub3']?></td>
                          <td><?php echo $row['sub4']?></td>
                          <td><?php echo $row['sub5']?></td>
                          <td><?php echo $row['sub6']?></td>
                        </tr>
                        <tr>

                      <?php    
                      }
                        ?>
                       
                        
                         
                       
                       
                      </tbody>
                    </table>
                  </div>
                </div>
            
            </div>
          </div>
        </section>
      
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
