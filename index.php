<?php
require 'required.php';

?>
<html>
	<head>
		<title>Lightsearch</title>
		<link type="text/css" href="css\style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/jscript_one.js"></script>
		<link rel="icon" href="favicon.png" type="image/icon">
	</head>
	<body>
		<header>
			<div class="logo"><img src="images/logo2.png" alt="LightSearch"></div>
			<h1>LightSearch</h1>
		</header>
		<div class="searchsection">
			<input id="searchbar" name="search" type="text" placeholder="Recherche..." autocomplete="off" onkeyup="searchWebsite()">
			<button onclick="searchWebsite()">Search</button>
			<ul id="result">
			</ul>
		</div>
		
		
	</body>
</html>