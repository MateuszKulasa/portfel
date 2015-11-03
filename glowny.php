<!DOCTYPE HTML>
<html>
<head>
<title> Logowanie </title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="komunikat">
<?php
	session_start();
	echo "dziala!";
	echo " Witaj ".$_SESSION ['imie'];
?>
</div>
</body>
</html>