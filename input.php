<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>input</title>
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
			<?php
				if($_GET['sub']==true)
					echo("Received!");
			?>
			<form name="input_new_entry" method="post" action="new_entry.php">
			<table class= 'entry' width="100%" border="0" cellpadding="3" cellspacing="1">
				<tr>
					<td><strong>Key</strong></td>
					<td><input name="key" type="text" id="key" size="52"></td>
				</tr>
				<tr>
					<td valign="top"><strong>Location</strong></td>
					<td><input name="loc" type= "text"id="loc" value= "<?php echo $_COOKIE["location"]; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="Submit" value="Submit"></td>
				</tr>
			</table>
			</form>
			
		</div>
	</div>
</body>
</html>
	