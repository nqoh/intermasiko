window.addEventListener("scroll" , function(){
   if(window.pageYOffset >= 50){
	document.getElementById("navs").style.position="fixed";
	document.getElementById("navs").style.marginTop="-65px";  
   }else{
    document.getElementById("navs").style.position="static";
	document.getElementById("navs").style.marginTop="0px";  
   }
},false);
function change(){document.getElementById("image").src ="thumbnails/inter3.gif";}
function backs(){document.getElementById("image").src ="thumbnails/inter1.gif";}

function emailsins(){document.getElementById("emails").src="thumbnails/Menu/icoemail4.png" ;}
function emailsout(){document.getElementById("emails").src="thumbnails/Menu/icoemail3.png" ;}
function homein(){document.getElementById("home").src="thumbnails/Menu/icohome4.png" }
function homeout(){document.getElementById("home").src="thumbnails/Menu/icohome3.png" ;}
function aboutin(){document.getElementById("about").src="thumbnails/Menu/icoabout4.png" }
function aboutout(){document.getElementById("about").src="thumbnails/Menu/icoabout3.png" ;}
function quickin(){document.getElementById("quick").src="thumbnails/Menu/icoquick4.png" }
function quickout(){document.getElementById("quick").src="thumbnails/Menu/icoquick3.png" ;}
function whatin(){document.getElementById("what").src="thumbnails/Menu/icowhat4.png"; }
function whatout(){document.getElementById("what").src="thumbnails/Menu/icowhat3.png" ;}
var tof=false;
function menus(){
	if(tof==false){
	document.getElementsByClassName("sublinks").item(0).style.display="block";	
	/*document.getElementsByClassName("sublinks").item(0).style.webkitTransform="rotateY(0deg)";
	document.getElementsByClassName("sublinks").item(0).style.mozTransform="rotateY(0deg)";
	document.getElementsByClassName("sublinks").item(0).style.oTransform="rotateY(0deg)";
	document.getElementsByClassName("sublinks").item(0).style.msTransform="rotateY(0deg)";
	document.getElementsByClassName("sublinks").item(0).style.Transform="rotateY(0deg)";*/
	tof=true;
	}else{
	document.getElementsByClassName("sublinks").item(0).style.display="none";	
	/*document.getElementsByClassName("sublinks").item(0).style.webkitTransform="rotateY(90deg)";
	document.getElementsByClassName("sublinks").item(0).style.mozTransform="rotateY(90deg)";
	document.getElementsByClassName("sublinks").item(0).style.oTransform="rotateY(90deg)";
	document.getElementsByClassName("sublinks").item(0).style.msTransform="rotateY(90deg)";
	document.getElementsByClassName("sublinks").item(0).style.Transform="rotateY(90deg)";*/
	tof=false;
	
	}



}