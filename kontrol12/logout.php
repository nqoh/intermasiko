<?php
session_start();

if(isset($_GET['name'])){
	if($_GET['name'] == $_SESSION['username']){
	session_destroy();	
	header("location:index.php");
	}
	
}

?>