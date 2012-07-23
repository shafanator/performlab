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





// get values that sent from form
$key=$_POST['key'];
$loc=$_POST['loc'];

$datetime=date("y/m/d H:i:s"); // create date and time

// Insert answer
$sql2="INSERT INTO $tbl_name( order_num, loc, date_time)VALUES('$key', '$loc', '$datetime')";
$result2=mysql_query($sql2);



mysql_close();
header( 'Location: input.php?sub=true' ) ;
?>
