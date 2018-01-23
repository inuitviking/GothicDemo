<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<script src="js/functions.js"></script>

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="icon" type="icon" href="img/main/icon.ico">

		<title><?=ucfirst(str_replace('_', ' ', $_GET['page']))." - Gothic Demo" ?></title>

	</head>

	<body onload="init();">

		<header>

			<a href="?page=home"><h1>Gothic Demo</h1></a>

			<nav>

				<ul class="topnav" id="myTopnav">

					<li><a href="home" class="active">Frontpage</a></li>
					<li><a href="history">History Archive</a></li>
					<li><a href="about">About</a></li>
					<li><a href="contact">Contact</a></li>
					<li class="icon"><a href="javascript:void(0);" style="font-size:15px;" onclick="responsiveNav()">☰</a></li>

				</ul>

			</nav>

		</header>
