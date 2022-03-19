<?php
 include 'connect.php';
 $error='<p align="center" id="error"></p><br>';
if(isset($_POST['name']) && isset($_POST['email']) ){
   $name=mysqli_real_escape_string($conn,$_POST['name']);
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $message=mysqli_real_escape_string($conn,$_POST['message']);
   
   if(empty($name) && empty($email ) && empty($message)){
   $error='<p align="center" style="color:red">All fields required</p>';
   }else if(strlen($name) <= 2 ){
   $error='<p align="center" style="color:red">Invalid Name</p>';   
   }else if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
	   $error='<p align="center" style="color:red">Invalid email addres</p>';
   }else{
   $query=mysqli_query($conn , "INSERT INTO `admin` VALUES(null ,'$name','$email','$message',CURRENT_TIMESTAMP)");
   $error='<p align="center" id="error" style="color:green">Successfuly sent</p>';  
   }
}
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
      <!--  <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/smally.css" type="text/css" media="screen and (min-width: 400px)">-->
        <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px)">
        <link rel="stylesheet" href="css/mediam.css" type="text/css" media="screen and (min-width: 900px)">
        <link rel="stylesheet" href="css/large.css" type="text/css" media="screen and (min-width: 1200px)" >
        <link rel="icon" type="image/ico" href="thumbnails/interfavicon.ico">
</head>
<script src="javascript/contact.js"></script>

<body>
<a href="index.php" class="log" ><img src="thumbnails/inter1.gif" id="image" width="200" height="50" onMouseOver="change()" onMouseOut="backs()"></a>

<nav id="navs">
<div id="menus" onClick="collaps()">
<div></div>
<div></div>
<div></div>
</div><br><br>

<div id="mynavs">
<a href="#" onClick="return false" style="margin-top:-3px"><img src="thumbnails/Menu/icowhat3.png"  id="what" onMouseOver="whatin()" onMouseOut="whatout()" onClick="menus()"> &#9662;</a>
<div class="sublinks" >
   <a href="project.php">Project</a><br>
   <a href="student.php" >Activities for students</a><br>
   <a href="tourism.php">Tourism</a><br>
   <a href="accomondation.php">Holiday accommodation</a>
</div>

<a href="#"  style="margin-top:1px"><img src="thumbnails/Menu/icoquick3.png" id="quick" onMouseOver="quickin()" onMouseOut="quickout()"></a>
<!--<a href="#" style="margin-top:1px"><img id="emails" src="thumbnails/Menu/icoemail3.png" onMouseOver="emailsins()" onMouseOut="emailsout()"></a> -->

<a href="#" style="color:#202021; background-color:#e8f1ff;margin-left:13px; padding:10px; margin-top:-10px"><img src="thumbnails/Menu/icocontact2.png" id="contact" onMouseOver="contactin()" onMouseOut="contactout()"></a>

<a href="aboutus.php"><img src="thumbnails/Menu/icoabout3.png" id="about" onMouseOver="aboutin()" onMouseOut="aboutout()"></a>
<a href="index.php"><img onMouseOver="homein()" onMouseOut="homeout()" id="home" src="thumbnails/Menu/icohome3.png"></a>
</div>

</nav>


<div class="wrap" style="height:auto; width:auto">
   <div class="aboutus" align="center"><h1 align="center" style="padding-bottom:5px">Contact Us</h1></div><br>
   
   <div class="content" >  
   <form  action="contactus.php" method="post" enctype="multipart/form-data">
   
      <div class="contact">
  <p ><b>Phone&nbsp;: </b>+45 51 49 13 40 </p>
  <p ><b>Cell&nbsp;&nbsp;&nbsp;&nbsp;: </b>+27 (0)76 309 5390</p>
    <p ><b>Cell&nbsp;&nbsp;&nbsp;&nbsp;: </b>+27 (0)84 067 1465</p>
  <p ><b>Email&nbsp;: </b>erik.bilsted@gmail.com</p>
  <p ><b>Physical Address&nbsp;:</b>
         160 Currie Road<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Durban 4001<br>         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;South Africa </p>

  <a href="#"><img src="thumbnails/icon-facebook.png" style="margin-left:30px;"></a>
  </div>
      <b><?php echo $error ?><b>
    <b><label>&nbsp;&nbsp;Your Name:<span style="color:red">*</span></label> </b><br><br>
<input type="text" name="name" id="name" onBlur="text_validate(this)" style="width:200px" onKeyUp="text_name(this)" placeholder="Name"><br><br>
   
  <b><label>&nbsp;&nbsp;Your Email  Address:<span style="color:red">*</span></label></b><br><br>
  <input type="email" name="email" onBlur="email_validate(this)" style="width:200px" placeholder="Email adress"><br><br>
  <b><label>&nbsp;&nbsp;Enter Your Message :<span style="color:red">*</span></label></b><br><br>
  <textarea rows="5" cols="30" name="message" placeholder="Write Your Story..."></textarea><br><br>
  <input type="submit" value="Send"> <input type="reset" value="Clear">
  </form>
   </div>

</div>
<br>
<footer > <p class="footer" align="center" style="color:white;"> Intermasiko Education & Culture &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white;font-weight:bold">About us</a></p><a href="#"><img src="thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="thumbnails/tws.png" id="tw"></a></footer>

</body>
</html