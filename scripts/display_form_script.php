<?php


include("account.php");
include("connect.php");
include("display_form_commands.php");



$unsafe_ucid = $_POST[("ucid")];

$ucid = mysql_real_escape_string($unsafe_ucid);


displaydata($ucid);


?>

<!doctype html>

<head>
<link rel="stylesheet" href="website style.css">
</head>

<body>

<script type="text/javascript" src="form2Javascript.js"></script>

<input type="button" class="button" value="Back to home" onClick="window.location.href='https://web.njit.edu/~amw46/index.html'" />
</body>
