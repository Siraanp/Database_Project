<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update customer set name='$name',password='$pass',mobile='$mob',address='$add',country='$country' where email='$eid'";
//$book="update booking set name='$name',mobile='$mob',address='$add',country='$country' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.com</title>
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
  include('Menu Bar1.php');
  ?>
 <?php
     $sql= mysqli_query($con,"select * from customer where email='$eid' "); 
     $result=mysqli_fetch_assoc($sql);
?>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid"id="primary"><!--Primary Id-->

  <div class="container" style="box-shadow:2px 2px 2px;background-color:#90c1ec;">
    <div class="row">
	<center><?php  echo $msg; ?></center><br>
  <center><h1 style="font-family: 'Lobster', cursive;">- User Profile -</h1></center><br>
     <form class="form-horizontal" method="post">
       <div class="col-sm-9">
          <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="name" value="<?php echo $result['name']; ?>"class="form-control"/>
          </div>
        </div>
      </div>

      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Email-Id:</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['email']; ?>"class="form-control"/readonly="readonly">
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Password:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="pass" value="<?php echo $result['password']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Mobile:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="mob" value="<?php echo $result['mobile']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Address:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="add" value="<?php echo $result['address']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Country:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="country" value="<?php echo $result['country']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Gender:</h4></div>
                <div class="col-sm-8">
                 <strong><?php echo $result['gender']; ?></strong>
          </div>
        </div>
      </div>
      
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"></div>
                <div class="col-sm-8">
                 <input type="submit" value="Update Profile" name="update" class="btn btn-primary"/>
          </div>
        </div>
      </div>
	  <br>
    <br>

    </div>
<!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>
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
