<?php

#requires the connection file
#require_once('code/connect.php');

#requires CRUD class
#require_once('class/CRUD.php');

if(isset($_GET['page'])){

	$page = $_GET['page'];

}

if(empty($page)){

	header('Location: ?page=home');

}elseif(!file_exists('pages/'.$page.'.php')){

	print "<script>window.location.replace('?page=404')</script>";

}else{

	require_once('assets/header.php');

	include('pages/'.$page.'.php');

	require_once('assets/footer.php');

}