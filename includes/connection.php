<?php
$conn = mysqli_connect("localhost" , "root", "admin@90","scholar");
 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>