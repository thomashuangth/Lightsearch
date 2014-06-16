<?php
require 'required.php';
?>
<html>
	<head>
		<title>Lightsearch</title>
		<link type="text/css" href="css/style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/jscript_one.js"></script>
		<link rel="icon" href="images/favicon.png" type="image/icon">
	</head>
	<body class="main">
		<header>
			<div class="logo"><img src="images/logo2.png" alt="LightSearch"></div>
			<h1>LightSearch</h1>
		</header>
		<div class="searchsection">
			<form action="resultat.php" method="GET">
				<div class="indexsearch">
					<ul id="result">
					</ul>
					<input id="searchbar" name="search" type="search" placeholder="Recherche..." autocomplete="off" onkeyup="searchWebsite()" value="<?php echo $_GET["search"] ?>" autofocus>
					<button onclick="goSearch()">Chercher
						<input type="hidden" id="url" name="url" value="url">
					</button>
				</div>
			</form>
		</div>
		<div class="credit">
			<a href="urltocrawl.php">Crawler</a>
		</div>
		
	</body>
</html>