<?php
// need user name, pass word  and database name.
	$db = mysqli_connect("localhost", 
	"myuser",
	"mypass", 
	"mydb");
	if (isset($_POST['submit'])) 
	{
		//echo "Good connection";
		//posting the fields and connect it up to the table attribute
		$fname = mysqli_escape_string($db,
			$_POST['fname']);
		$emailU = mysqli_escape_string($db,
			$_POST['emailU']);
		$password = mysqli_escape_string($db,
			$_POST['password']);
//posting the values to the databases
		$db->query("INSERT INTO users(fname, emailU, password) VALUES ('$fname', '$emailU', '$password')");
		
	}
	//else echo "Errrrrrrror";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</style>
</head>
<body>
<script type="text/javascript" src="javascriptSport.js"></script>

<!---------------------------------------------------------->
<!-- Nav Bar ----------------------------------------------->

	<div class="nav1" id="mynav1">
<!--Adding the logo which is a spinning dots to the left and always showing -->
	  <a href="index.html" class="active"><p id="sw">
	  <i class="fa fa-spinner fa-spin" style="font-size:20px;color:white"></i>&nbsp;&nbsp;&nbsp; Sports World</p></a>
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
			      <div class="form-1" id="resetShow">
        <form name="ForgotPass" action="signup.php" onsubmit="return newuser()" align="center" method="post">
            <h3> Sign up as new user for sports world here </h3>
			<input type="text" class="loginInput" name="fname" align="center" placeholder="Full Name"/>
            <input type="email" class="loginInput" name="emailU" placeholder="Email Address" > <br>
			<input type="password" class="loginInput" name="password" align="center" placeholder="password"/>
            
            <input type="submit" class="loginSubmit" name="submit" value="Submit">
            <a href="sportsApp.html"><input type="button" class="SignUp" name="cancel" value="Back"></a>
            
        </form>
      </div> <!-- FORGOT PASSWORD FORM END -->

			</div> <!-- LOGIN FORM END -->
					<!--<table class="tabmm" align="center" style="max-width:400px;">
				   <tr>
						<th>Name</th>
						<th>Comment</t>
				   </tr>
				  -->
				<?php
				//filling in the table from the database infomation 
					if($db == true){
						$query = mysqli_query($db, "SELECT * FROM users");
						while ($row = mysqli_fetch_array($query)) {
					//printing name and comment for every entry
					//echo
					  // "<tr>
					//	<td>{$row['fname']}</td>
						//<td>{$row['emailU']}</td>
						//<td>{$row['password']}</td>
					   //</tr>\n";

					}
					}
					else echo"!!DB connection Error!!";
					
				?>
				<!-- table ends--->
				<!--</table>-->
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