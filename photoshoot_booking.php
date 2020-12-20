<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
             background-image:url('images/lbg.jpg');  
            background-repeat: no-repeat;
             
         }
     </style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CM Photography</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_register.php">Register</a>
      </li>
    </ul>
    
  </div>
</nav>

	 <h1 style="position: absolute; left: 25%; top: 20%"> <font color="Black"> Photoshoot Booking </font> </h1>
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
         <input type="submit" value="Book" name="save" required style="position: absolute; width: 100%">
     </b>
	</form>
	<?php
		include('connect.php');
		extract($_REQUEST);
		if(isset($save))
		 		 {
			  	$sql= "insert into booking(uname,contact,category,bdate) values ('$uname','$contact','$category','$bdate')";
			  	if(mysqli_query($conn,$sql))
			  	{
					  echo '<script>alert("Booking Successful")</script>';  
					 /* header("location:welcome.php");*/
			  	}

			  	else
			  	{
					  echo '<script>alert("Booking not successful")</script>'; 
					 /* header("location:abc.php");*/
			  	}	
			  
		}

	?>
</body>
</html>
