<?php
include '../connect.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$name=$_GET['name'];
mysqli_query($conn,"Delete FROM `admin` WHERE id=$id");	
header('location:admin.php');

}

?>