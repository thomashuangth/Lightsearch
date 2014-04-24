<html>
	<head>
		<title>Lightsearch</title>
		<link type="text/css" href="css\style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/jscript_one.js"></script>
		<link rel="icon" href="favicon.png" type="image/icon">
	</head>
	<body>
		<header class="resultatpage">
			<a href="index.php">
				<div class="brand">
					<div class="logo"><img src="images/logo2.png" alt="LightSearch"></div>
					<h3>LightSearch</h3>
				</div>
			</a>
			<div class="resultatsearch">
				<form action="resultat.php" method="GET">
					<input id="searchbar" name="search" type="text" placeholder="Recherche..." autocomplete="off" onkeyup="searchWebsite()" value="<?php echo $_GET["search"] ?>">
					<button onclick="searchWebsite()">Search</button>
				</form>
				<ul id="result">
				</ul>
			</div>
		</header>
		<div class="allresult">
			<ul>
				<li>
					<h3><a href="#">Lightsearch.com - The Lighting Manufacturer & Product ...</a></h3>
					<div class="link">www.lightsearch.com</div>
					<div class="description">Lightsearch.com is one of the largest directories of world-wide lighting manufacturers, products, designers, lamps, bulbs, fixtures, controls, dimmers, luminaires, ...</div>
				</li>
				<li>
					<h3><a href="#">Northern Light Search</a></h3>
					<div class="link">www.nlsearch.com</div>
					<div class="description">Northern Light no longer offers NLSearch as a public news search engine, however enterprises may license access to Northern Light Business News. Northern ...</div>
				</li>
			</ul>
		</div>


	</body>
</html>