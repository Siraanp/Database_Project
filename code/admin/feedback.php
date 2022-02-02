<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='delete_feedback.php?id='+id;	
		}
	}
</script>
<table class="table table-striped table-hover" style="background-color:white;">
	<h1>Feedback</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Country</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from feedback join customer on feedback.c_id=customer.c_id ");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name=$res['name'];
$email=$res['email'];
$mobile	=$res['mobile'];
$address =$res['address'];
$gender	=$res['gender'];
$country =$res['country'];
$message=$res['message'];
$fdate=$res['fdate'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td><?php echo $res['message']; ?></td>
		<td><?php echo $res['fdate']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>