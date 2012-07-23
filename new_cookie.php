<?php
$loc=$_POST['loc'];
setcookie("location", $loc);
header( 'Location: admin.php');
?>