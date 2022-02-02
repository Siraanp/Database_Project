<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from customer where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;  
    header('location:Booking Form.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <style>
        body {
          background-image: url('hotel_management.gif');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
          }
  </style>
</head>
<body style="margin-top:50px;">
<?php
include('Menu Bar1.php')
?>
<br>
<br>
<br>
<br>
<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#90c1ec;"><br>

        	<h1 align="center"><b><font style="font-family: 'Lobster' #000;">- User Login -</font></b></h1>
          <img src="image/clipart/login-user-icon.png" class="img-circle" alt="Bird" width="130" height="120">
          <?php echo @$error; ?>
          <form method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
          <div class="form-group forget">
                <a href="forgotten.php">Forget Password</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registation form.php">Create an Account</a>
            </div>
      	</form><br>
      </div>
    </div><br>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include('Footer.php')
?>
</body>
</html>
