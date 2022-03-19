<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tourism</title>
     <!--  <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/smally.css" type="text/css" media="screen and (min-width: 400px)">-->
        <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px)">
        <link rel="stylesheet" href="css/mediam.css" type="text/css" media="screen and (min-width: 900px)">
        <link rel="stylesheet" href="css/large.css" type="text/css" media="screen and (min-width: 1200px)" >
        <link rel="icon" type="image/ico" href="thumbnails/interfavicon.ico">
</head>
<script src="javascript/tourism.js"></script>

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
<!--<a href="#" style="margin-top:1px"><img id="emails" src="thumbnails/Menu/icoemail3.png" onMouseOver="emailsins()" onMouseOut="emailsout()"></a>-->
<a href="contactus.php" style="margin-top:1px" ><img src="thumbnails/Menu/icocontact3.png" id="contact" onMouseOver="contactin()" onMouseOut="contactout()"></a>
<a href="aboutus.php" ><img src="thumbnails/Menu/icoabout3.png" id="about"></a>
<a href="index.php"><img onMouseOver="homein()" onMouseOut="homeout()" id="home" src="thumbnails/Menu/icohome3.png"></a>
</div>

</nav>




<div class="wrap" style="height:auto; width:auto" align="center">
   <div class="aboutus" align="center"><h1 align="center" style="padding-bottom:5px">Tourism</h1></div><br>
   <div class="content" align="center">   </div>

</div>
<br>
<footer > <p class="footer" align="center" style="color:white;"> Intermasiko Education & Culture &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white;font-weight:bold">About us</a></p><a href="#"><img src="thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="thumbnails/tws.png" id="tw"></a></footer>

</body>
</html>