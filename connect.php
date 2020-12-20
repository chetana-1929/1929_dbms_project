<?php

$conn = mysqli_connect('localhost','root','','photodb');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?> 