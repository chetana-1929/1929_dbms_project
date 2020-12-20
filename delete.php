<?php 
include ('connect.php');

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['booking_id'])) {
	$booking_id = $_GET['booking_id'];

	// write delete query
	$sql = "DELETE FROM `booking` WHERE `booking_id`='$booking_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>