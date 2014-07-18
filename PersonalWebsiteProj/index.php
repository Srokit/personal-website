<?php 
	require_once ("noaccess/phpscript.php");
	if (!empty($_POST)) #if form has been submitted
		handleForm();
	
	require("noaccess/head.php");
?>
	<body>
		<div id="leftBGBar">
		</div>
		<div id="rightBGBar">	
		</div>
		<div id="container">
			<div id="topBar" class="endBar">
				<h1>Welcome to my Site</h1>
				<h3>Have a look around :D</h3>
			</div>
				<?php 
					require("noaccess/leftbar.php");
				?>
			<div id="mainSect">
				<div id="firstMainDiv">
					<h3>
						I hope you enjoy the site. I made it very customizable via the bar on the left. Feel free to make the site yours.<br>
						I am currently enrolled in a camp that is teaching me about web developemnt.<br>
						So this site is showing off some of the cool things I learned about HTML, CSS, and Javascript.	
					</h3>
				</div>
				<div id="secondMainDiv">
					<h3>
						There are three other sections to the site that you are welcome to explore. <br>
						Also if you are interested in my coding and developemnt skills you can check out the source of this site.
					</h3>
				</div>
				<div id="thirdMainDiv">
					<h3>
						Right now this site cannot be found unless one knows the exact url (http://www.stanssite.net76.net/).<br>
						Unfortunately this is because this site is not normally hosted as most sites are.<br>
						Instead this site is hosted by a free webhosting service at www.000webhost.com.
					</h3>
				</div>
			</div>
			<div id="rightBar" class="sideBar">
				<h3 id="personalArea">Hmm I wonder who is using this site...</h3>
				<h3>
					<?php 
						if(isset($_SESSION["message"])){
							echo $_SESSION["message"];
							unset($_SESSION["message"]);
						}
						if(isset($_SESSION["error"])){
							echo $_SESSION["error"];
							unset($_SESSION["error"]);
						}
					?>
				</h3>
			</div>
			<div id="bottomBar" class="endBar">
				<ul>
					<li>
						<a href="jsdemo.php">
							<h3>Javascript Demo</h3>
						</a>
					</li>
					<li>
						<a href="links.php">
							<h3>Cool Links</h3>
						</a>
					</li>
					<li>
						<a href="contact.php">
							<h3>Contact Me</h3>
						</a>
					</li>
				</ul>
 			</div>
		</div>
	</body>
</html>