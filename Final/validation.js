function validate(){
	let username = document.getElementById("username").value;
	let password = document.getElementById("password").value;
	let email = document.getElementById("email").value;

	if(username == ""){
		alert("Please enter username");
		return false;
	}
	if(username.length < 7){
		alert("Username must be 7 characters long");
		return false;
	}
	if(password == ""){
		alert("Please enter password");
		return false;
	}
	if(password.length < 7){
		alert("Password must be 7 characters long");
		return false;
	}
	if(email == ""){
		alert("Please enter email");
		return false;
	}
	// return false;
}