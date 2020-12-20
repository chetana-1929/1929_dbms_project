<?php 
include "connect.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$uname = $_POST['uname'];
		$contact = $_POST['contact'];
		$category = $_POST['category'];
		$bdate = $_POST['bdate'];
		$booking_id = $_POST['booking_id'];
		 
		 

		// write the update query
		$sql = "UPDATE `booking` SET `uname`='$uname',`contact`='$contact',`category`='$category',`bdate`='$bdate' WHERE `booking_id`='$booking_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['booking_id'])) {
	$booking_id = $_GET['booking_id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `booking` WHERE `booking_id`='$booking_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			 
			$uname = $row['uname'];
			$contact = $row['contact'];
			$category = $row['category'];
			$bdate  = $row['bdate'];
			$booking_id = $row['booking_id'];
			 
		}

	?>
		<h2 required style="position: absolute; left: 30%">Booking Details Update Form</h2>
		 <form method="post" style="position: absolute; left: 30%; top: 42%">
	 	<b>Name: <input type="text" name="uname" required style="position: absolute; left: 30%"> <br> <br>
	 	Contact: <input type="text" name="contact" required style="position: absolute; left: 30%"> <br> <br>
		 

		Choose a category: <select name="category"  required style="position: absolute; left: 50%">
              <option value="Birthday">Birthday</option>
              <option value="Wedding">Wedding</option>
              <option value="Engagement">Engagement</option>
              <option value="Fashion">Fashion</option>
              </select>
                <br><br>
		
		 Date of Photoshoot: <input type="date" name="bdate"  > <br> <br>

          <input type="submit" value="Update" name="save" required style="position: absolute; width: 100%">
     </b>
	</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		//header('Location: view.php');
	}

}
?>