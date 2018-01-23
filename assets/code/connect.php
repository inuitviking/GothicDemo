<?php
session_start();
$con = new mysqli('localhost','root','','gothic') or die("No connection to the database. Please contact the website administrator");
$con->set_charset("utf8");
?>
