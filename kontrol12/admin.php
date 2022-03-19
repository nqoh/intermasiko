<?php
include 'pagination.php';
session_start();
$image='';
if(isset($_SESSION['username'])){
	 if($_SESSION['username'] == 'erik'){
	 $image='<img src="icoerik.png">';	 
	 }else if($_SESSION['username'] == 'mildred'){
		 $image='<img src="icomild.png">';	
	 }
}else{
	header('location:index.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wellcome <?php echo $_SESSION['username'] ?></title>
      <!--  <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/smally.css" type="text/css" media="screen and (min-width: 400px)">
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px)">
        <link rel="stylesheet" href="css/mediam.css" type="text/css" media="screen and (min-width: 900px)">-->
        <link rel="stylesheet" href="../css/large.css" type="text/css" media="screen and (min-width: 1200px)">
        <link rel="icon" type="image/ico" href="../thumbnails/interfavicon.ico">
</head>
<script>
function msgin(){document.getElementById("msg").src="icomsg4.png" ;}
function msgout(){document.getElementById("msg").src="icomsg3.png" ;}
function login(){document.getElementById("log").src="icolog4.png" ;}
function logout(){document.getElementById("log").src="icolog3.png" ;}
</script>

<body>
<a href="index.php" class="log" ><img src="../thumbnails/inter1.gif" id="image" width="200" height="50" onMouseOver="change()" onMouseOut="backs()"></a>

<nav id="navs">
<p style="float:left; margin-top:9px; margin-left:20px"><?php echo $image ?> </p>

<a href="logout.php?name=<?php echo $_SESSION['username'] ?>" style="margin-top:12px"><img onMouseOver="login()"  onMouseOut="logout()" id="log" src="icolog3.png"></a>

<a href="#" style="margin-top:10px"><img onMouseOver="msgin()"  onMouseOut="msgout()" id="msg" src="icomsg3.png"></a>

</div>

</nav>




<div class="wrap" style="height:auto; width:500px">
   <div class="aboutus" align="center"><h1 align="center" style="padding-bottom:5px">Messages</h1></div><br>
    <div class="content">
   <?php   echo $emaillist  ?>
       <p align="center" style="margin-top:-50px"><b><?php echo $paginationCtrls  ?></b></p>
    </div>

</div>
<br>
<footer > <p class="footer" align="center" style="color:white;"> Intermasiko Education & Culture &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white;font-weight:bold">About us</a></p><a href="#"><img src="../thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="../thumbnails/tws.png" id="tw"></a></footer>

</body>
</html>