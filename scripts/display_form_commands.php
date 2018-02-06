<?php


function authentication($n, $p) {
	$s = "SELECT * FROM authorization WHERE user='$n' AND password='$p'";

	$data = mysql_query($s) or die (mysql_error());
	$r = false;

	if($info = mysql_fetch_array($data)) {
		$r = true;
	}

	return $r;

}


function displaydata($user) {
	$find = "SELECT * FROM incident WHERE user='$user'";
	$result = mysql_query($find) or die(mysql_error());

	echo("<table>");

	echo("<caption>");
	echo("Number of rows is ") . mysql_num_rows($result);
	echo("</caption>");

	//create table rows and headers
	//ECHO <tr><th>Number</th>  <th>User</th> <th>Priority</th> </tr>
	echo("<tr>");

		echo("<th>");
		echo("Number");
		echo("</th>");

		echo("<th>");
		echo("User");
		echo("</th>");

		echo("<th>");
		echo("Category");
		echo("</th>");

		echo("<th>");
		echo("Priority");
		echo("</th>");

		echo("<th>");
		echo("Description");
		echo("</th>");

		echo("<th>");
		echo("Time");
		echo("</th>");

	echo("</tr>");


	//same order as table

	while ($r = mysql_fetch_array($result)) {

		echo("<tr>");

		echo("<td>");
		echo($r["number"]); //r is a dictionary
		echo("</td>");

		echo("<td>");
		echo($r["user"]);
		echo("</td>");

		echo("<td>");
		echo($r["category"]);
		echo("</td>");

		echo("<td>");
		echo($r["priority"]);
		echo("</td>");

		echo("<td>");
		echo($r["description"]);
		echo("</td>");

		echo("<td>");
		echo($r["timestamp"]);
		echo("</td>");

		echo("</tr>");

	}


	echo("</table>"); //close table

}

?>
