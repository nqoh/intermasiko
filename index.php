<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INTERMASEKO</title>
      <!--  <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/smally.css" type="text/css" media="screen and (min-width: 400px)">-->
        <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 0px)"> 
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px)">
        <link rel="stylesheet" href="css/mediam.css" type="text/css" media="screen and (min-width: 900px)">
        <link rel="stylesheet" href="css/large.css" type="text/css" media="screen and (min-width: 1200px)" >
        <link rel="icon" type="image/ico" href="thumbnails/interfavicon.ico">
</head>
<script src="javascript/index.js"></script>
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
<a href="index.php" style="color:#202021; background-color:#e8f1ff;margin-left:13px; padding:10px; margin-top:-10px"><img onMouseOver="homein()" onMouseOut="homeout()" id="home" src="thumbnails/Menu/icohome2.png"></a>
</div>

</nav>
<div class="slide">
<img src="" id="img">
  <div class="bubbles" align="center">
     <div align="center" onClick="bluble(0);   clearTimeout(intarval)" id="0" style="background-color:#e8f1ff" ></div>
     <div align="center" onClick="bluble(1);   clearTimeout(intarval)" id="1"></div>
     <div align="center" onClick="bluble(2);   clearTimeout(intarval)" id="2"></div> 
  </div>
</div>

<br>
<div class="container">

   <img src="thumbnails/SB mennesker c.jpg" style="float:left; width:250px; height:300px; margin-top:10px; margin-left:15px; margin-right:10px"><h1 align="left" style="color:#202021; font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><b>WELCOME TO INTERMASIKO</b></h1>
 <h4 align="left" style="margin-left:15px">We are a privately owned company with activities within education, tourism and accommodation in South Africa.<br>
We are accredited by LGSETA and have Memorandum of Understanding’s with various other Sectors for Education and Training<br>
We arrange and manage student exchange programmes for international teacher students who are interested in doing part of their practice at South African schools. <br><br>
We manage guided tours for tourists with focus on nature, culture and leisure.<br>
We also offer holiday accommodation in a 100 square meters new renovated flat.

</h4>
</div><br>
<footer > <p class="footer" align="center" style="color:white;"> Intermasiko Education & Culture &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white;font-weight:bold">About us</a></p><a href="#"><img src="thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="thumbnails/tws.png" id="tw"></a></footer>

</body>
</html>