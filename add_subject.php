<?php


  include('dbconnection.php');

  $sub1=$sub2=$sub3=$sub4=$sub5=$sub6="";
  $subserr="";


session_start();




if (isset($_SESSION['login'])) {




       if (empty($_POST["sub1"])) {
              $subserr="please enter the subjects name";
       }else{
              $sub1=$_POST['sub1'];
       }

       if (empty($_POST["sub2"])) {
              $subserr="please enter the subjects name";
       }else{
              $sub2=$_POST['sub2'];
       }

       if (empty($_POST["sub3"])) {
              $subserr="please enter the subjects name";
       }else{
              $sub3=$_POST['sub3'];
       }

       if (empty($_POST["sub4"])) {
              $subserr="please enter the subjects name";
       }else{
              $sub4=$_POST['sub4'];
       }

       if (empty($_POST["sub5"])) {
              $subserr="please enter the subjects name";
       }else{
              $sub5=$_POST['sub5'];
       }

       if (empty($_POST["sub6"])) {
              $subserr="please enter the subjects name";
       }else{
              $sub6=$_POST['sub6'];
       }

 
       

       $sql=mysqli_query($con,"INSERT INTO `users` (`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`) values('$sub1','$sub2','$sub3','$sub4','$sub5','$sub6') ");

       if ($sql) {
              $successadd="subjects are added successfully";
              # code...
       }else{
              echo "some problem occurs";
       }
      }
      else{
          echo  "<script>location.href:'login.php'</script>";

      }

  
  
  ?>




<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add course  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>


  






    <header class="header">   
      
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/profile-pic (8).png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Ahmed raza</h1>
            <p>Software Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="dashboard.php"> <i class="icon-grid"></i>Tables </a></li>
                <li><a href="add_course.php"> <i class="fa fa-bar-chart"></i>Add course </a></li>
                <li class="active"><a href="add_subject.php"> <i class="icon-padnote"></i>Add Subjects </a></li>
                <li> <a href="changepasswd.php"> <i class="bi bi-arrow-clockwise"></i>Forget Password </a>
          </li>
          <li>
           
            <a href="login.php"> <i class="icon-logout"></i>Login page </a>
          </li>
          <li>
           
            <a href="logout.php"> <i class="icon-logout"></i>logout page </a>
          </li>
        </ul>
               <!--- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>    ---->
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add Subjects</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Subjects           </li>

            
          </ul>
        </div>
        <form action="" method="POST">
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
             
              <!-- Horizontal Form-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong class="d-block">Add Subjects</strong><span class="d-block"></span></div>
                  <div class="block-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Subject 1</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="sub1" placeholder="subjects " class="form-control is-invalid form-control-success"><small class="form-text">please enter the subjects required to u </small> <div class="invalid-feedback"><strong><?php echo $subserr; ?>
                           </strong></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Subject 1</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="sub2" placeholder="subjects " class="form-control is-invalid form-control-success"><small class="form-text">please enter the subjects required to u </small> <div class="invalid-feedback"><strong><?php echo $subserr; ?>
                           </strong></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Subject 1</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="sub3" placeholder="subjects " class="form-control is-invalid form-control-success"><small class="form-text">please enter the subjects required to u </small> <div class="invalid-feedback"><strong><?php echo $subserr; ?>
                           </strong></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Subject 1</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="sub4" placeholder="subjects " class="form-control is-invalid form-control-success"><small class="form-text">please enter the subjects required to u </small> <div class="invalid-feedback"><strong><?php echo $subserr; ?>
                           </strong></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Subject 1</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="sub5" placeholder="subjects " class="form-control is-invalid form-control-success"><small class="form-text">please enter the subjects required to u </small> <div class="invalid-feedback"><strong><?php echo $subserr; ?>
                           </strong></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Subject 1</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="text" name="sub6" placeholder="subjects " class="form-control is-invalid form-control-success"><small class="form-text">please enter the subjects required to u </small> <div class="invalid-feedback"><strong><?php echo $subserr; ?>
                           </strong></div>
                        </div>
                      </div>
                     
                      <div class="form-group row">       
                        <div class="col-sm-9 offset-sm-3">
                          <input type="submit" value="SUBMIT" class="btn btn-primary">
                           <div class="invalid-feedback"><strong><?php echo $successadd; ?>
                           </strong></div>
                        </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
             
            
            </div>
          </div>
        </section>
        </form>
       
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>