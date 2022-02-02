<?php 
include('Menu Bar1.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from customer where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from booking where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

   $sql="insert into booking(name,email,phone,address,contry,room_type,check_in_date,check_in_time,check_out_date,Occupancy,a_id,c_id,room_id) 
  values('$name','$email','$phone','$address','$country',
  '$room_type','$cdate','$ctime','$codate','$Occupancy',(select a_id from admin where name = 'admin'),(select c_id from customer where email = '$email'),(select room_id from rooms where type = '$room_type' and bedding = '$Occupancy'))";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
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
<div class="container-fluid text-center"id="primary"><!--Primary Id-->
<br>
<br>
<br>
<br>
            <br>
  
  <div class="container" style="box-shadow:2px 2px 2px;background-color:#90c1ec;">
    <div class="row">
      <br>
      <br>
      <?php echo @$msg; ?>
      <!--Form Containe Start Here-->
      <h1>- BOOKING Form -</h1><br>
     <form class="form-horizontal" method="post" action="">
       <div class="col-sm-5">
         <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['name']; ?>"  class="form-control" name="name" placeholder="Enter Your Frist Name"required>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-8">
              <input type="email" value="<?php echo $result['email']; ?>"  class="form-control" name="email"  placeholder="Enter Your Email-Id"required/>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Mobile :</h4></div>
          <div class="col-sm-8">
              <input type="number" value="<?php echo $result['mobile']; ?>"  class="form-control" name="phone" placeholder="Type Your Phone Number"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Address :</h4></div>
          <div class="col-sm-8">
              <textarea name="address" class="form-control"  placeholder="Enter Your Address"><?php echo $result['address'];  ?></textarea>
          </div>
        </div>
        </div>

         <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Country</h4></div>
          <div class="col-sm-8">
              <input type="text" class="form-control"  value="<?php echo $result['country']; ?>" name="country" placeholder="Enter Your City Name"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="hidden" name="state" class="form-control"placeholder="Enter Your State Name"required>
          </div>
        </div>
        </div>

		      <div class="form-group">
            <div class="row">
           <div class="control-label col-sm-4"><h4></h4></div>
          <div class="col-sm-8">
              <input type="hidden" name="zip" class="form-control" placeholder="Enter Your Zip Code"required>
          </div>
        </div>
        </div>
        </div>

           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Room Type:</h4></div>
                  <div class="col-sm-7">
                <select class="form-control" name="room_type"required>
                  <option>Superior Room</option>
                  <option>Guest House</option>
                  <option>Deluxe Room</option>
                  <option>Single  Room</option>
               </select>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>check In Date :</h4></div>
                  <div class="col-sm-7">
                  <input type="date" name="cdate" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                 <div class="control-label col-sm-5"><h4>Check In Time:</h4></div>
                   <div class="col-sm-7">
                    <input type="time" name="ctime" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Check Out Date :</h4></div>
                <div class="col-sm-7">
                  <input type="date" name="codate" class="form-control"required>
                </div> 
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <label class="control-label col-sm-5"><h4 id="top">Occupancy :</h4></label>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="single" name="Occupancy"required >Single</div>
                  <div class="radio-inline"><input type="radio" value="double" name="Occupancy" required>Double</div>
                  <div class="radio-inline"><input type="radio" value="triple" name="Occupancy" required>Triple</div>
                  <div class="radio-inline"><input type="radio" value="quad" name="Occupancy" required>Quad</div>
                </div> 
              </div>
            </div>
            <input type="submit"value="submit" name="savedata" class="btn btn-danger"required/>
            <br>
            <br>
            <br>
            <br>
            <br>
            
          </div>
          </form><br>
          <br>
        </div>
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
<?php
include('Footer.php')
?>
</body>
</html>
