

function validate(){
	var uname, upass;
	uname = document.getElementById("uname").value;
	upass = document.getElementById("password").value;
	//alert(uname)
	if(uname.length < 7){
		document.getElementById("uerr").innerHTML = "Please enter atleast 7 characters";
		return false;
	}
	if(upass.length < 7){
		document.getElementById("perr").innerHTML = "Please enter atleast 7 characters";
		return false;
	}

	if (upass.search(/[a-z]/i) < 0) {
        document.getElementById("perr").innerHTML = "Your password must contain at least one lowercase letter.";
        return false;
    }
    if (upass.search(/[0-9]/) < 0) {
        document.getElementById("perr").innerHTML = "Your password must contain at least one digit."; 
        return false;
    }
    if (upass.search(/[A-Z]/) < 0) {
        document.getElementById("perr").innerHTML = "Your password must contain at least one Uppercase letter."; 
        return false;
    }
	return true;
}