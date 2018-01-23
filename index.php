<?php

#requires the connection file
require_once('assets/code/connect.php');

#requires Classes
require_once('assets/code/Classes.php');

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
