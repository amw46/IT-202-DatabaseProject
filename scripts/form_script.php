<?php

include("account.php");
include("connect.php");
include("form_commands.php");

$unsafe_ucid = $_POST[("ucid")];
$unsafe_comment = $_POST[("comment")];
$priority = $_POST[("priority")];
$category = $_POST[("category")];

$ucid = mysql_real_escape_string($unsafe_ucid);
$comment = mysql_real_escape_string($unsafe_comment);


formdata($ucid, $category, $priority, $category);
$number = mysql_insert_id();

echo ("Data sent successfully.");




//print access granted
//call formdata function
//insert id
//echo response?



?>

<!doctype html>
<head>
<title>Tech Support Form</title>
<link rel="stylesheet" href="website style.css">
</head>

<body>

<script type="text/javascript" src="form2Javascript.js"></script>

<input type="button" class="button" value="Back to home" onClick="window.location.href='https://web.njit.edu/~amw46/index.html'" />
</body>

