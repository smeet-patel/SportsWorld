<?php
	// need user name, pass word  and database name.
		$db = mysqli_connect("localhost", 
		"myuser",
		"mypass", 
		"mydb");
	//echo "enter"; 
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		</style>
	</head>
	<body>
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
			<a href="sportsApp.html"><span style="color:#1DA1F2;font-weight:bold">Login</span></a>
			<a href="Soccer.html">Soccer</a>
			<a href="cricket.php">Cricket</a>
			<a href="Rugby.php">Rugby</a>
			<!--Shows menubutton when screen is small -->
			<a href="javascript:void(0);" style="font-size:15px;" class="menubutton" onclick="myFunction()">&#9776;</a>
		</div>
		<div class="row1">
			<div class="col1">
				<div class="container" style="float: left; position: relative;left: +25%; align-items: center;">
					<div class="form-1" id="loginShow">
						<br>
						<h3 style="color:darkorange;" align="center">Please enter your login details below to continue</h3>
						<form name="loginForm" action="sportsApp.php" onsubmit="return login()" align="center" method="post">
							<br>
							<input type="text" class="loginInput" align="center"id="emailU" name="emailU" placeholder="Username / email"> <br>
							<input type="password" align="center"class="loginInput" name="password" placeholder="Password"> <br>
							<br>
							<?php
								if (isset($_POST['submit'])){ 
										$emailU = mysqli_escape_string($db,
											$_POST['emailU']);
										$password = mysqli_escape_string($db,
											$_POST['password']);
								$sql="select * from users where emailU='$emailU' and password ='$password'";
								//echo"$sql"; //test if print 
								$result = mysqli_query($db, $sql); 
								//if ($result ) { 
								//  echo mysqli_num_rows($result);}
								if (mysqli_num_rows($result)>0){
								//echo "yes"; //testing if successful
								header('Location: insideWebApp.html');
								}else{
								echo '<span align="center" style="color:darkorange;"> Login failed. <br> Please re-enter login details or sign up</span>';
								}  }
									//else echo "Errrrrrrror";
								?>
							<p align="center" id="feedbacknew" style="color:darkorange;"></p>
							<input type="submit" class="loginSubmit" name="submit" value="Login" align="center">
							<br>
							<input type="reset" class="loginButtons" align="center" onclick="return resetForm(this.form); name="reset" value="Reset Fields">
							<a href="resetpass.html"><input type="button" class="loginButtons" align="center" name="forgotpassword" value="Forgot Password"></a>
							<br>
							<a href="signup.php"><input type="button" class="SignUp" align="center" name="SignUp" value="SignUp"></a>
						</form>
					</div>
					<!-- LOGIN FORM END -->
				</div>
			</div>
			<div class="col1">
				<img src="m1.jpg" alt="Argentina player" width="100%">
			</div>
		</div>
		<br>
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
</html>