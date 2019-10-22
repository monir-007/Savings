function regform_Validation() {
	var a = document.forms["myform"]["fname"].value;
	var b = document.forms["myform"]["uname"].value;
	var c = document.forms["myform"]["gender"].value;
	var d = document.forms["myform"]["email"].value;
	var e = document.forms["myform"]["pass"].value;
	var f = document.forms["myform"]["rpass"].value;
	var g = document.forms["myform"]["phone"].value;
	var h = document.forms["myform"]["address"].value;

	if (a == "") {
		alert("First Name cannot be empty");
	}
	if (||!(/^\S{3,}$/.test(b))) {
	alert("Username cannot be empty and cannot contain whitespace");

	}
	if (c == "") {
		alert("Gender cannot be empty");
	}

	if (e.length<8||e.length>32) {
	alert("Password length is between 8-32 chars");
	}
	if (h == "") {
		alert("Address cannot be empty");
	}
	if (f != e) {
		alert("Re-type Password did not match");
	}
	if (!(/^[0-9]+$/.test(g))) {
		alert("Phone Number Should contain number only ");
	}

}
