<?php
 $conn=mysqli_connect("localhost","root") or die("Database server not found");
 mysqli_select_db($conn,"intermasiko") or die("Not connected to the database");
?>