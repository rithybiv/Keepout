// Originally from CodeLifter.com, but now it's just a window.open basically.

var windowW = 485 // wide
var windowH = 385 // high

var windowX = (screen.width/2)-(windowW/2);
var windowY = (screen.height/2)-(windowH/2);

var urlPop = "about.php"

s = "width="+windowW+",height="+windowH+",scrollbars=no";
var beIE = document.all ? true : false

function openAbout(){
	NFW=window.open(urlPop,"popFrameless",+s)
	NFW.blur()
	window.focus() 
	NFW.resizeTo(windowW,windowH)
	NFW.moveTo(windowX,windowY)
	
	NFW.focus()   
}