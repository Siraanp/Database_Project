<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from rooms where room_no='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "this room is already added";	
	}		
	else
	{	
	mysqli_query($con,"insert into rooms values('','$rno','$type','$bedding')");	
	echo "Rooms added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Room No</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Bedding</th>
		<td><input type="text" name="bedding"  class="form-control"/>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Room Details" name="add"/>
		</td>
	</tr>
</table> 
</form>