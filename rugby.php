<?php
	//$dbconn=pg_connect("host=db.ecs.vuw.ac.nz dbname=patelsmee-jdbc username=patelsmee password=pass123");
	pg_query($dbconn, "selec")
	// need user name, pass word  and database name.
		$db = mysqli_connect("localhost", 
		"myuser",
		"mypass", 
		"mydb");
		if (isset($_POST['newcomment']))
		{
			if (Pname!=null || comment !=null){
			//echo "Good connection";
			//posting the fields and connect it up to the table attribute
			$Pname = mysqli_escape_string($db,
				$_POST['Pname']);
			$comment = mysqli_escape_string($db,
				$_POST['comment']);
			$CommentingEmail = mysqli_escape_string($db,
			//posting the values to the databases
				$_POST['CommentingEmail']);
			$db->query("INSERT INTO Comments(name, comment, email) VALUES ('$Pname', '$comment', '$CommentingEmail')");
			}
		}
		//else echo "Errrrrrrror";
	?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Rugby will be shown on the tab title -->
		<title>Rugby</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!--Author Smeet-->
		<!-- linking the js page -->
		<script type="text/javascript" src="javascriptSport.js"></script>
		<!---------------------------------------------------------->
		<!-- Nav Bar ----------------------------------------------->
		<div class="nav1" id="mynav1">
			<!--Adding the logo which is a spinning dots to the left and always showing -->
			<a href="index.html" class="active">
				<p id="sw">
					<i class="fa fa-spinner fa-spin" style="font-size:20px;color:white"></i>&nbsp;&nbsp;&nbsp; Sports World
				</p>
			</a>
			<!--Floating to the Left Side of the menu, the other pages-->
			<a href="sportsApp.php"><span style="color:#1DA1F2;font-weight:bold">Login</span></a>
			<a href="Soccer.html">Soccer</a>
			<a href="cricket.php">Cricket</a>
			<a href="Rugby.php">Rugby</a>
			<!--Shows menubutton when screen is small -->
			<a href="javascript:void(0);" style="font-size:15px;" class="menubutton" onclick="myFunction()">&#9776;</a>
		</div>
		<!-- Banner code ----------------------------------------------->
		<div class="bannerContainer">
			<img src="rugby2.jpg" alt="Smeet" style="width:100%" class="responsiveImg">
		</div>
		<div class="centerWrap1">
			<!--Centering everything in the div-->
			<div align="center">
				<!-- Button which enables user to change background theme depending the team they support-->
				<button type="button" onclick="nz()" class="SignUp1">New Zealand Supporter</button>
				<button type="button" onclick="arg()" class="SignUp2">Argentina Supporter</button>
			</div>
			<!-- Theme of the page is NZ vs ARG--->
			<h2 align="center">New Zeland (35) vs Argentina (17) on Sunday the 30th of September 
				2018 at Estadio José Amalfitani
			</h2>
			<!--enable for the flex tiles row and col--->
			<div class="row">
				<div class="column">
					<!--container consist the image and text to display center
						when full screen---------------------------------------->
					<div class="container">
						<div class="rugby-form">
							<!--<div id="commentscroll" style="overflow:scroll; max-height:250px; max-width:400px;">-->
							<!-- table with content-->
							<table class="tabmm" align="center" style="max-width:400px;">
								<tr>
									<th>Name</th>
									<th>Comment</t>
								</tr>
								<?php
									//filling in the table from the database infomation 
										if($db == true){
											$query = mysqli_query($db, "SELECT * FROM Comments");
			 								while ($row = mysqli_fetch_array($query)) {
										//printing name and comment for every entry
										echo
										   "<tr>
											<td>{$row['name']}</td>
											<td>{$row['comment']}</td>
										   </tr>\n";
									
										}
										}
										else echo"!!DB connection Error!!";
										
									?>
								<!-- table ends--->
							</table>
						</div>
					</div>
					<!-- Comment submition form -->
					<div class="container">
						<!-- secondary level title -->
						<h2 align="center">Comments on the Game</h2>
						<!-- Form code starts ----------------------------------------------->
						<form name="rugby-form" action="rugby.php" onsubmit="return validateComment()" align="center" method="post">
							<input type="text" class="loginInput" name="Pname" align="center" placeholder="Name"/> <!-- Person name-->
							<br>
							<input type="email" class="loginInput" align="center" name="CommentingEmail" placeholder="Email"/> <!-- email-->
							<br>
							<textarea name="comment" class="loginInput" align="center" rows="4" width="100%" placeholder="Comment"></textarea>
							<!-- comment-->
							<br>
							<input type="submit" class="SignUp" name="newcomment" align="center" value="Submit" /> <!-- submit comment-->
						</form>
						<!-- general knowlege Quiz using JS for alert-->
						<p align="center" style="color:darkorange">How many tries were scored by the all blacks?</p>
						<!-- form for the quiz -->
						<form name="confirm" onsubmit="return validateForm()" align="center" method="post">
							<input type="text" name="code" class="loginInput" align="center" placeholder="Number of tries scored by ABs in the game">
							<input type="submit" align="center" value="Submit answer" class="SignUp" name="try"> <!-- submit guess or answer-->
						</form>
						<!-- embeding map of where the game was played -->
						<div class="map" id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.764085500381!2d-58.522885484252306!3d-34.635401566683264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc8382fb08ab9%3A0xea0ca78972856a8e!2sEstadio+Jose+Amalfitani!5e0!3m2!1sen!2snz!4v1538795863473" text-align= "center" width="400" height="400" align="center" frameborder="0" style="border:0; margin: 0 auto 0 auto;" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<!--second col-------------->
				<div class="column">
					<div class="container">
						<!--Embeding social media -------------->
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FAllBlacks%2Fposts%2F10155838472021915&width=500" width="500" height="666" style="border:none;overflow:hidden; background-color: white;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
					<div class="container">
						<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAllBlacks%2Fvideos%2F1035987906583516%2F&show_text=0&width=500" width="500" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
					</div>
					<!--Adding a picture-->
					<img src="r1.jpg" alt="Argentina player" width="500">
				</div>
			</div>
		</div>
		<br>
		<!---------------------------------------------------------->
		<!-- Index Page sports titles ------------------------------>	
		<br>
		<!---------------------------------------------------------->
		<!---------------------------------------------------------->
		<!-- Footer with Icons ------------------------------------->
		<footer class="footer">
			<!-- Enable and imports the icons in the banner -->
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
			<div class="container text-center">
				<!--Banner Taken from my personal portfoilo -->
				<a href="">Smeet 18</a>
				<a href="https://www.linkedin.com/in/smeet-patel-/"><i class="fa fa-linkedin-square"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href="mailto:smeetprpatel@gmail.com?Subject=Mail%20from%20Website" target="_top"><i class="fa fa-envelope"></i></a>
				<a href="https://goo.gl/maps/fReyXVpdCDB2"><i class="fa fa-map-marker"></i></a>
			</div>
		</footer>
	</body>
</html>