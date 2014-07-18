<div id='leftBar' class='sideBar'>
	<div id='nameInputArea'>
		<h3>Please input your information for a personalized experience.</h3>
		<form method='post' action='index.php'>
			<input type='text' name='username' placeholder='Username'>
			<input type='password' name='password' placeholder='Password'>
			<input type='text' name='name' placeholder='Your Name'>
			<input type='submit' value='Submit'>
		</form>
	</div>
	<div id='colorInputArea'>
		<h3>Please enter a color for a new jazzy site!</h3>
		<h6>Main:</h6>
		<input type='color' id='colorInputMain'>
		<button onclick="useColor('main')">Submit</button>
		<h6 id='colorInputSecTitle'>Secondary:</h6>
		<input type='color' id='colorInputSec'>
		<button onclick="useColor('secondary')">Submit</button>
	</div>
	<div id='BGInputArea'>
		<h3>Please pick a background for your viewing pleaseure. :P</h3>
<?php
	if ($_SERVER["PHP_SELF"] == "jsdemo.php")
		echo
		"<button onclick='changeBG(3)'>
			<img src='images/3ColorBG.jpg'>
		</button>
		<button onclick='changeBG(4)'>
			<img src='images/blueCheckered.jpg'>
		</button>
		<button onclick='changeBG(5)'>
			<img src='images/metalBG.jpg'>
		</button>
		<button onclick='changeBG(6)'>
			<img src='images/branchesBG.jpg'>
		</button>
	</div>
</div>";
	
	else
		echo
		"<button onclick='changeBG(1)'>
			<img src='images/3ColorBG.jpg'>
		</button>
		<button onclick='changeBG(2)'>
			<img src='images/blueCheckered.jpg'>
		</button>
		<button onclick='changeBG(3)'>
			<img src='images/metalBG.jpg'>
		</button>
		<button onclick='changeBG(4)'>
			<img src='images/branchesBG.jpg'>
		</button>
	</div>
</div>";
?>