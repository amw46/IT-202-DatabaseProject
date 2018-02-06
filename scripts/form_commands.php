<?php

// FORM COMMANDS
// Authentication
// Insert Data into Database
// User response returned

date_default_timezone_set('America/New York');

function authentication($n, $p) {
	$s = "SELECT * FROM authorization WHERE user='$n' AND password='$p'";

	$data = mysql_query($s) or die (mysql_error());
	$r = false;

	if($info = mysql_fetch_array($data)) {
		$r = true;
	}

	return $r;

}

function formdata($inuser, $incat, $inprior, $incomment) {
	$in = "INSERT INTO incident VALUES ('', '$inuser', '$incat', '$inprior', '$incomment', NOW())";
	mysql_query($in) or die (mysql_error());


}

?>
