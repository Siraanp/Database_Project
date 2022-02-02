<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='delete_room.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover" style="background-color:white">
	<h1>Room Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms" class="btn btn-primary">Add New Rooms</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Room No</th>
		<th>Type</th>
		<th>Occupancy</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_id'];	
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['bedding']; ?></td>

		<td><a href="dashboard.php?option=update_room&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>