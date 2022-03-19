function change(){document.getElementById("image").src ="thumbnails/inter3.gif";}
function backs(){document.getElementById("image").src ="thumbnails/inter1.gif";}

var i=0;var images=['thumbnails/image1.jpg','thumbnails/image2.jpg','thumbnails/IMG_5084.jpg'];window.onload=was;
function slider(){
	i++;
	if( i > (images.length-1)){
		i=0;}
		var intarval=setTimeout('was()',1000)
		}

function was(){
document.getElementById("img").src=images[i];
var c =['0','1','2'];
   document.getElementById(c[i]).style.backgroundColor="#999";
   for(x=0; x < c.length ; x++){ 
	if( i == x){
		continue
	}else{
	document.getElementById(c[x]).style.backgroundColor="#e8f1ff"; 
	}
 

}
var intarval =setTimeout('slider()',4000);
}
function bluble(x){
var c =['0','1','2'];	
document.getElementById("img").src=images[x];
document.getElementById(x).style.backgroundColor="#999";
for(var p=0; p < c.length ; p++){ 
	if( p == x){
		continue
	}else{
	document.getElementById(c[p]).style.backgroundColor="#e8f1ff"; 
	}
  }

}

window.addEventListener("scroll" , function(){
   if(window.pageYOffset >= 50){
	document.getElementById("navs").style.position="fixed";
	document.getElementById("navs").style.marginTop="-65px";  
   }else{
    document.getElementById("navs").style.position="static";
	document.getElementById("navs").style.marginTop="0px";  
   }
},false);


function emailsins(){document.getElementById("emails").src="thumbnails/Menu/icoemail4.png" ;}
function emailsout(){document.getElementById("emails").src="thumbnails/Menu/icoemail3.png" ;}
function aboutin(){document.getElementById("about").src="thumbnails/Menu/icoabout4.png" }
function aboutout(){document.getElementById("about").src="thumbnails/Menu/icoabout3.png" ;}
function contactin(){document.getElementById("contact").src="thumbnails/Menu/icocontact4.png" }
function contactout(){document.getElementById("contact").src="thumbnails/Menu/icocontact3.png" ;}
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