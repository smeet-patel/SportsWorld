//Author Smeet Patel
// . alerting if the feilds on the comments form are not filled out and there should not be an entry
function validateComment() {
	// . seting varibles 
    var x = document.forms["rugby-form"]["Pname"].value;
    //if the name is black 
	if (x == "") {
		//popup message asking for a name
        alert("Your name must be filled out");
        return false;
	}
	
	//email needed 
	var y = document.forms["rugby-form"]["CommentingEmail"].value;
    if (y == "") {
        alert("Enter Email");
        return false;
	}
	
	//comment cant be blank
	var z = document.forms["rugby-form"]["comment"].value;
    if (z == "") {
        alert("Write a comment");
        return false;
	}
}

// .  this enable all black suporter to have ABs theme background image.
function nz() {
    document.body.style.backgroundImage = "url('allb.jpg')";
	document.body.style.backgroundRepeat = "repeat";//allow repeat. good when page is long
	document.body.style.backgroundImage.opacity = "0.5"; //background is less intense
}

// . setting a background color for the arg team supporters. 
function arg() {
    document.body.style.backgroundColor = "#75AADB";
}

// .  js is change the text of paragraph tag and set text-color to red.
function bfc() {
	document.getElementById("teamSupport").innerHTML = "Go Barcelona!!!";
	document.getElementById("teamSupport").style.color = "red";
}

// .  can switch from the above text colour text. for real medrid supporter
function RM() {
	document.getElementById("teamSupport").innerHTML = "Go Real Madrid!!!";
	document.getElementById("teamSupport").style.color = "#1DA1F2";
}

// .  on press button text goes to 50px.
function big() {
	document.getElementById("teamSupport").style.fontSize = "50px";
	// .  button is not displayed
	document.getElementById("largeB").style.display = "none";
}

// . onsubmit alert
function submitemail(){
	alert("we'll send you instructions on how to reset your password");
}

// .  guessing the number of trys by the ABs team in a game
function validateForm() {
				var x = document.forms["confirm"]["code"].value;
				if ( x== "5") {
					alert("Correct Code");
				}
				// else if and or used 
				else if (x == "4" || x== "6") {
					alert("Close to the code");
				}
				//else what message appears 
				else {
					alert("Wrong input");
				}
			}

// . The Magic Code using Javascript which allows the meun button
// to appear and enabling the nav bar to be responsive
// Code from my personal website and other SIM tutor test it.  
function myFunction() {
    var x = document.getElementById("mynav1");
    if (x.className === "nav1") {
        x.className += " responsive";
    } else {
        x.className = "nav1";
    }
}