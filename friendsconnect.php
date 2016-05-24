<?php


DEFINE ('DB_NAME', 'friends');

$dbcon = mysqli_connect('localhost', 'root', '', DB_NAME);

if(!$dbcon) {
	die('error connecting to database');
}

?>