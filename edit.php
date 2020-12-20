<?php
include("connect.php");

if(isset($_GET['booking_id']))
 {
	$booking_id = $_GET['booking_id'];
	$sql= "SELECT * FROM booking where booking_id=".$booking_id;
	$result= $conn->query($sql);
	if($result->num_rows>0)
	{ 
		while($row = mysqli_fetch_assoc($result))
		{
			 
			$uname = $row['uname'];
			$contact = $row['contact'];
			$category = $row['category'];
			$bdate  = $row['bdate'];
			 
			 
			
		}


	}
	else
        {
            echo 'No record found';
        }	

 }
 else
	{
		echo 'No record found';
	}

	if(isset($_POST['update']))
    {
        if (isset($_POST['uname']) && !empty($_POST['uname']))
        {
            $uname = $_POST['uname'];
        }
        else
        {
           echo "Failed";
        }

        if (isset($_POST['contact']) && !empty($_POST['contact']))
        {
            $contact = $_POST['contact'];
        }
        else
        {
            echo "Failed";
        }


        if (isset($_POST['category']) && !empty($_POST['category']))
        {
            $category = $_POST['category'];
        }
        else
        {
            echo "Failed";
        }

        if (isset($_POST['bdate']) && !empty($_POST['bdate']))
        {
            $bdate = $_POST['bdate'];
        }
        else
        {
            echo "Failed";
        }
        if(isset($uname) && !empty($uname))
        {
        	if(isset($contact) && !empty($contact))
      	  {
            if(isset($category)  && !empty($category))
            {
                if(isset($bdate)  && !empty($bdate))
                {

                    $booking_id = $_POST['booking_id'];
                    
                    $sql = "UPDATE booking SET uname='$uname',contact='$contact',category='$category',bdate='$bdate' WHERE booking_id=.'$booking_id'";

                    if($conn->query($sql) == TRUE) 
                    {
                        echo "success";
                    }
                    else
                    {
                        echo "Failed";
                    }
                
                }
            
            }
        }
        }    
    }

?>

<!DOCTYPE html>
<html>
<head>
	 

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-info" >
      
		<div class="container">
			<br>
			<h1 class="text-white bg-dark text-center">
			Update Booking Details 
			</h1>
		</div>

		<div class="col-lg-5 m-auto d-block">
			<br>
		 <h2>User Update Form</h2>
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

         <p >Payment option: Cash On Delivery Only</p> <br>
         <input type="submit" value="UPDATE" name="save" required style="position: absolute; width: 100%">
     </b>
	</form>

         <br>
         <a href="booking_table.php?click=1">
			<input type="submit" name="submit" value=" View Records " class="btn btn-success">

		</a>
		</div>
		
</body>
</html>