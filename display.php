<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<?php
define("ROOT",dirname("..").'/');

// Load config file
$_DB = array();
$_VAR = array();
require_once('config.inc.php');

$host=$_DB['host'];
$username=$_DB['user']; // Mysql username
$password=$_DB['pass'];; // Mysql password
$db_name=$_DB['database']; // Database name
$tbl_name="prod_info"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
$result=mysql_query($sql);
?>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>index</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Shafran">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!-- Date: 2012-07-02 -->
</head>
<body>
	<div id="wrapper">
		<div id="header"></div>
		<div id ="sidebar">
			<a href="input.php">Input New Entry</a>
			<a href="admin.php">Admin</a>
			<a href="display.php">Display</a>
		</div>
		<div id="content">
			<table class= 'entry' width="100%" border="0" cellpadding="3" cellspacing="1">
				<tr>
					<form name="show_all" method="post" action="display.php">
						<td>Show All/Order By:</td>
						<td><select>
							<option> </option>
							<option value="loc">Location</option>
							<option value="ord">Order Number</option>
							<option value="time">Time</option>
						</select></td>
						<td><input type="submit" name="Submit" value="Search"></td>
				</tr>
				<tr>
					<form name="search" method="post" action="display.php">
						<td>Search By Order Number:</td>
						<td><input name="key" type="text" id="key" size="52"></td>
						<td><input type="submit" name="Submit" value="Search"></td>
				</tr>
				<tr>
					<form name="only_loc" method="post" action="display.php">
						<td>Show only:</td>
						<td><select>
							<option></option>
						<?php
							while($rows=mysql_fetch_array($result)){ // Start looping table row
						?>
							<option value='<? echo $rows['loc']; ?>'><? echo $rows['loc']; ?></option>
						<?php
						}
						?>
						</select></td>
						<td><input type="submit" name="Submit" value="Search"></td>
				</tr>
				</table>

				
		</div>
	</div>
</body>
</html>
