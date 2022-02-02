<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];

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
        .table{
         background-color:white;
        }
  </style>
</head>
<body style="margin-top:50px;">
  <?php
      include('Menu Bar1.php');
  ?>
<br>
<br>
<br>
<br>

<div class="container-fluid"><!--Primary Id-->
  <h1 class="text-center text-primary" style="font-family: 'Lobster', cursive;">- Booking Details -</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check In Time</th>
                    <th>Check Out Date</th>
                    <th>Occupancy</th>
                    <th>Price</th>
					          <th>Cancel</th>
               </tr>
               <?php 
      $sql= mysqli_query($con,"SELECT * FROM booking join rooms on booking.room_id=rooms.room_id where email='$eid' ");
        while($result=mysqli_fetch_assoc($sql))
        {
        $oid=$result['id'];
        echo "<tr>";
        echo "<td>".$result['name']."</td>";
        echo "<td>".$result['email']."</td>";
        echo "<td>".$result['phone']."</td>";
        echo "<td>".$result['address']."</td>";
        echo "<td>".$result['contry']."</td>";
        echo "<td>".$result['room_type']."</td>";
        echo "<td>".$result['check_in_date']."</td>";
        echo "<td>".$result['check_in_time']."</td>";
        echo "<td>".$result['check_out_date']."</td>";
        echo "<td>".$result['Occupancy']."</td>";
        echo "<td>".$result['price']."</td>";
        echo "<td><a href='cancel_order.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
        echo "</tr>";
        }                         
               ?> 
          </table>

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
