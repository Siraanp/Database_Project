
<table class="table table-bordered table-striped table-hover" style="background-color:white">
	<h1>Room Booking Details</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check Out Time</th>
		<th>Check Out Date</th>
		<th>Occupancy</th>
		<th>Price</th>
		<th>Cancel Order</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"SELECT * FROM booking join rooms on booking.room_id=rooms.room_id");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['Occupancy']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><a style="color:red" href="cancel_order.php?booking_id=<?php echo $oid; ?>">Cancel</a></td>
	</td>
</tr>
<?php 	
}

?>	
</table>