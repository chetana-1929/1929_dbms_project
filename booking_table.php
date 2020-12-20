<?php 
include "connect.php";

//write the query to get data from users table

$sql = "SELECT * FROM booking";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Booking Details</h2>
<table class="table">
	<thead>
		<tr>
		<th>Booking Id</th>
		<th>Name</th>
		<th>Contact</th>
		<th>Category</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['booking_id']; ?></td>
					<td><?php echo $row['uname']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['category']; ?></td>
					<td><?php echo $row['bdate']; ?></td>
					<td><a class="btn btn-info" href="update.php?booking_id=<?php echo $row['booking_id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?booking_id=<?php echo $row['booking_id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>