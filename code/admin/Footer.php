<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #0f2453;">
  <div class="container-fluid">
	  <div class="col-sm-4 hov">
		
      <br>
      <br>
    <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Sector,59 Mamura Chowk,Noida</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>hotal@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+91) 7275308190</p><br> 
      
	  </div>&nbsp;&nbsp;
    
	</div>&nbsp;

  </div>
</footer>