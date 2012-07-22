<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<!--
	To Do List/ Ideas
		load document for authentication
			DB username
			DB password
			location
		data input(separate page)
		make css from website
-->
<?php
define("ROOT",dirname("..").'/');

// Load config file
$_DB = array();
$_VAR = array();
require_once('config.inc.php');

$host=$_DB['host'];
$username=$_DB['user']; // Mysql username
$password=$_DB['pass'];; // Mysql password
$db_name=$_DB['database']; // Database name*/
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
		<div id ="sidebar"></div>
		<div id="content"></div>
	</div>
</body>
</html>
