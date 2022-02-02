<?php 
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($login))
{
	if($eid=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from admin where email='$eid' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$eid;	
		header('location:dashboard.php');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="../css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<style>
        body {
          background-image: url('../hotel_management.gif');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
          }
  </style>
</head>
<body id="primary"style="margin-top:50px;">
	<?php
include('Menu Bar.php');
	?>
  <br>
  <br>
  <br>
  <br>
<div class="container-fluid"> <!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
		<div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#90c1ec;"><br>
			
			<h1 align="center"><b><font style="font-family: 'Lobster' #000;">- Admin Login -</font></b></h1>

      <img src="../image/clipart/login-user-icon.png" class="img-circle" alt="Bird" width="130" height="120">

			<?php echo @$error;?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid" placeholder="Email Id"required>
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass" placeholder="Password"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
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
<br>
<?php
include('Footer.php');
?>
</body>
</html>
