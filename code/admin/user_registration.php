<table class="table table-bordered table-striped table-hover" style="background-color:white">
	<h1>User Registration</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Country</th>
		
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from customer");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		
	</td>
	</tr>	
<?php 	
}
?>	