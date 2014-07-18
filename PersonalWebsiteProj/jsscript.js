fps = 30;
speed = 7;
function useName(){//uses the visitors name to edit parts of the site
	var nameInput = document.getElementById("nameInput");
	var name = nameInput.value;
	if(name == ""){ //If nothing was entered, request the user to enter something.
		var nameInputWarning = document.getElementById("nameInputWarning");
		nameInputWarning.innerHTML = "GASP! You forgot to enter a name."; 
	}
	else{
		var personalArea = document.getElementById("personalArea");
		personalArea.innerHTML = "This is your personalized site,<br>" + name + ".";
		//remove input area after submission	
		var nameInputArea = document.getElementById("nameInputArea");
		nameInputArea.innerHTML = "<h3>Thank you for making the site awsome. :]</h3>";
	}
}
function useColor(type){ //uses color input to change theme of site
	if(type == "main"){
		var colorInput = document.getElementById("colorInputMain");
		var color = colorInput.value;
		var mainSect = document.getElementById("mainSect");
		mainSect.style.backgroundColor = color;
	}
	else{ //type==secondary
		var colorInput = document.getElementById("colorInputSec");
		var color = colorInput.value;
		var topBar = document.getElementById("topBar");
		var leftBar = document.getElementById("leftBar");
		var rightBar = document.getElementById("rightBar");
		var bottomBar = document.getElementById("bottomBar");
		var secondaryBars = [topBar, leftBar, rightBar, bottomBar];
		for (index = 0; index < secondaryBars.length; index++)
			secondaryBars[index].style.backgroundColor = color;
	}
}
function changeBG(buttonNumber){
		var BG = document.getElementsByTagName("img")[buttonNumber - 1].src;
		var leftBGBar = document.getElementById("leftBGBar");
		var rightBGBar = document.getElementById("rightBGBar");
		leftBGBar.style.backgroundImage = "url(" + BG + ")";
		rightBGBar.style.backgroundImage = "url(" + BG + ")";
}
function followPointer(){
	var x = window.event.clientX - 50;
	var y = window.event.clientY - 50;
	var fighter = document.getElementById("fighter");
	fighter.style.left = x + "px";
	fighter.style.top = y + "px";
}
function fireMissle(){
	var x = window.event.clientX;
	var y = window.event.clientY;
	var missle = document.getElementById("missle");
	missle.style.left = x + "px";
	missle.style.top = y + "px";
}
function blitMissle(){
	var missle = document.getElementById("missle");
	var top = parseInt(missle.style.top);
	top -= speed;
	missle.style.top = top + "px";
}
setInterval(blitMissle, 1000/fps);