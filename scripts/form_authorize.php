<?php

include("account.php");
include("connect.php");
include("form_commands.php");

$unsafe_user = $_POST[("user")];
$unsafe_pass = $_POST[("password")];

$user = mysql_real_escape_string($unsafe_user);
$password = mysql_real_escape_string($unsafe_pass);

$clearance = authentication($user, $password);

if ($clearance == true) {

	print ("<h1><span style='color:#32CD32;'>Login Successful</span></h1>");

?>
	<!doctype html>

	<head>

	<title>Tech Support Form</title>


	</head>


	<body>

	<br>

	<div> <!-- form -->

	<form name="inputForm" onsubmit="validateform('inputForm')" action="form_script.php" method="post">
	<p>UCID: <input type="text" placeholder="UCID" name="ucid" id="ucid" required /></p>
	<div> <!-- select menu -->
	Category:
		<select name="category" id="category">
		<option value="default" selected="selected">Pick a category...</option>
		<option value="internet">Internet/Connectivity</option>
		<option value="hardware">Hardware</option>
		<option value="software">Software</option>
		<option value="os">Operating System</option>
		<option value="missing">Missing Part</option>
		</select>
	</div>


	<p>Urgency: <input type="range" min="1" max="5" value="2" class="slider" name="priority" id="priority"></p>


	<!-- <p><textarea id="comment" placeholder="Describe your error here." rows=10 cols=30></textarea></p> -->
	<p><input type="text" placeholder="Describe your error here." name="comment" id="comment" size="60" required /></p>


	<input type="submit" class="button" value="Submit" />
	</form>
	</div>

	<script>
	var slider = document.getElementById("priority");

	slider.oninput = function() {
		return this.value;
	}
	</script>

	<br>

</body>

<?php



}

else {

	echo ("<h1><span style='color:red;'>Access Denied</span></h1>");

}

?>

<!doctype html>

<head>

<title>Tech Support Form</title>

<link rel="stylesheet" href="website style.css">

</head>


<body>

<script type="text/javascript" src="form2Javascript.js"></script>

<br>

<input type="button" class="button" value="Back to home" onClick="window.location.href='https://web.njit.edu/~amw46/index.html'" />

</body>


