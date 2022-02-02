<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
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
<div class="container-fluid"id="primary"> <!-- Primary Id-->
  <div class="container" >
    <div class="row">
    <br>
    <br>
    <br> 
    <br>
    <br>
      <div class="col-sm-3"></div>
        <div class="col-sm-6" style="background-color:#90c1ec;color:#000;">
          <h1 style="margin-top:50px;padding-top:50px;">Forgot Account?</h1><hr>
          <?php echo  @$error; ?>
          <p class="text-center">Please Enter your Email-id or Phone Number to Find Your Account.</p><br><br>
          <form method="post" action="forgot.php">
        <div class="form-group">
          <input type="Email" name="forgot" class="form-control" id="#"placeholder="Email Id or Phone Number"required>
        </div><hr>
          <input type="submit" value="submit" name="submit" class="btn btn-primary btn-group-justified"required>
        </form><br><br> 
        </div>
    </div>
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