<!DOCTYPE html>
<html>
<head>
	<title>Cricket</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</style>
</head>
<body>
<script type="text/javascript" src="javascriptSport.js"></script>
<!-- Showing intext styling-->
<style>body{background-image: url('vk.jpg'); background-repeat: no-repeat;
    background-attachment: fixed;background-size:100% 100%;}</style>
<!---------------------------------------------------------->
<!-- Nav Bar ----------------------------------------------->

	<div class="nav1" id="mynav1">
<!--Adding the logo which is a spinning dots to the left and always showing -->
	  <a href="index.html" class="active"><p id="sw">
	  <i class="fa fa-spinner fa-spin" style="font-size:20px;color:white"></i>&nbsp;&nbsp;&nbsp; Sports World</p></a>
<!--Floating to the Left Side of the menu, the other pages-->
	<a href="sportsApp.php"><span style="color:#1DA1F2;font-weight:bold">Login</span></a>
	  <a href="Soccer.html">Soccer</a>
	  <a href="cricket.html">Cricket</a>
	  <a href="Rugby.php">Rugby</a>
<!--Shows menubutton when screen is small -->
	  <a href="javascript:void(0);" style="font-size:15px;" class="menubutton" onclick="myFunction()">&#9776;</a>
	</div>

	<div class="row1">
		<div class="col1">
		<div class="container" style="float: left; position: relative;left: +25%; align-items: center;">
			<div class="form-1" id="loginShow">
			      <div class="form-1" id="resetShow">
        <form name="Blog" onclick="submitblog()">
<!-- IF I HAD more time I would have implymented a blog systerm with out a database-->
            <h2 style="color:white;"> Write a blog on Cricket Here </h2>
					<input type="text" class="loginInput" name="Pname" align="center" placeholder="Name"/> <!-- Person name-->
					<br>
					<input type="email" class="loginInput" align="center" name="email" placeholder="Email"/> <!-- email-->
					<br><br>
					<input type="text" class="loginInput" name="btitle" align="center" placeholder="Blog Title"/>
					<br>
					<textarea name="blogT" class="loginInput" align="center" rows="12" width="100%" placeholder="Write Blog here"></textarea>
					<br>
					<input type="text" class="loginInput" align="center" name="imageurl" placeholder="Image URL"/> <!-- email-->
            <input type="submit" class="loginSubmit" name="submitblog" value="Submit" onclick="newUser">
            <input type="reset" class="SignUp" name="cancel" value="Clear ALL">

        </form>
      </div> <!-- FORGOT PASSWORD FORM END -->

			</div> <!-- LOGIN FORM END -->
		</div>
		</div>
	<div class="col1">
		<div class="container" >
			<div class="form-1" id="loginShow">
			      <div class="form-1" id="resetShow">
        <form name="Blog" onclick="submitblog()">
            <h2 style="color:white;"> Last Cricket Blog </h2>
<table style="width:400;"> 
<tr><td><h1>Batting Maestro (Virat Kohli)</h1></td></tr>
<tr><td><img class="img2" src="i6vk.jpg" width="500"></td></tr>
<tr><td><p><span>Virat Kohli</span> is an International Indian Cricketer, who is top order batsman for the Indian National Cricket team and for the Royal Challengers 
	Bangalore (RCB). He is known for his aggressive playing style and is a right-handed batsman and sometimes seen bowling right-arm medium pace. Currently 
	he is the Captain for RCB and Indian One Day Cricket team and also he's the vice-captain for the Indian Test team. Virat Kohli was also the India 
	Under-19s Captain world cup captain in Malaysia, 2008. A couple months after the under-19 world cup, he made his One Day International (ODI) debut 
	for Indian National Cricket team against Sri Lanka.</p>   
			<h1 class="w">Quotes from Virat Kohli</h1>
	<p>"No cricket team in the world depends on one or two players. The team always plays to win."<p>
	<p>"Self-belief and hard work will always earn you success."<p></td></tr>
<tr><td>Smeet</td></tr>
<tr><td>patelsmee@myvuw.ac.nz</td></tr>
</tr>
</table>

            <input type="button" class="SignUp" name="like" value="Like Blog">

        </form>
      </div> <!-- FORGOT PASSWORD FORM END -->

			</div> <!-- LOGIN FORM END -->
		</div>
	</div>
	</div>
	
	
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