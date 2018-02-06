
function validateform(a) {

var user = document.forms[ a ] ["user"].value;
var password= document.forms[ a ]["password"].value;


if (user.search(/[A-Za-z0-9]+/) == -1) {
	alert("Invalid username");
	return false;	
} //end if

if (pass.search(/[A-Za-z0-9]+/) == -1) {
	alert("Invalid password");
	return false;	
} //end if

else {
	return true;
} //end else


} //end function


//show form

function displayform(a) {

x = document.getElementById( a );

if (x.style.display == "none") {
	x.style.display = "block";

} //end if

else {
	x.style.display = "none";

} //end else




} //end function
