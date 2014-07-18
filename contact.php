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
				<h1>If you wanna contact Me :)</h1>
				<h3>Have a look around :D</h3>
			</div>
				<?php 
					require("noaccess/leftbar.php");
				?>
			<div id="mainSect">
				<h1>
					You can email me at:<br>
					srok35@gmail.com
				</h1>
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
						<a href="links.php">
							<h3>Cool Links</h3>
						</a>
					</li>
					<li>
						<a href="jsdemo.php">
							<h3>Javascript Demo</h3>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
</html>