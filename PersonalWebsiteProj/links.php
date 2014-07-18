<?php 
	require_once("noaccess/phpscript.php");
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
				<h1>Check out These Sites</h1>
				<h3>Have a look around :D</h3>
			</div>
				<?php 
					require("noaccess/leftbar.php");
				?>
			<div id="mainSect">
				<ul>
					<li>
						<a href="http://www.imgur.com/" target="_blank">
							<img src="images/imgurLogo.jpg">
						</a>
					</li>
					<li>
						<a href="http://www.addictinggames.com/" target="_blank">
							<img src="images/addictingGamesLogo.jpg">
						</a>
					</li>
					<li>
						<a href="http://www.stumbleupon.com/" target="_blank">
							<img src="images/StumbleUponLogo.png">
						</a>
					</li>
					<li>
						<a href="http://www.twitch.tv/" target="_blank">
							<img src="images/twitchLogo.png">
						</a>
					</li>
					<li>
						<a href="http://www.reddit.com/" target="_blank">
							<img src="images/redditLogo.png">
						</a>
					</li>
					<li>
						<a href="http://www.w3schools.com/" target="_blank">
							<img src="images/w3SchoolsLogo.jpg">
						</a>
					</li>
					<li>
						<a href="http://www.codeacademy.com/" target="_blank">
							<img src="images/codeAcademyLogo.png">
						</a>
					</li>
					<li>
						<a href="http://www.khanacademy.com/" target="_blank">
							<img src="images/khanAcademyLogo.jpeg">
						</a>
					</li>
					<li>
						<a href="http://www.youtube.com/" target="_blank">
							<img src="images/youtubeLogo.png">
						</a>
					</li>
				</ul>
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
						<a href="index.php">
							<h3>Back to Main</h3>
						</a>
					</li>
					<li>
						<a href="jsdemo.php">
							<h3>Javascript Demo</h3>
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