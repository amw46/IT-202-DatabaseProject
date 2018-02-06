<?php

include ("account.php");

$dbh = mysql_connect($hostname, $username, $password) or die ("Unable to connect to database");


print "<h2>Connected to MySQL</h2>";

mysql_select_db($database);



?>
