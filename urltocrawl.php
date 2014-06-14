<?php
require 'required.php';

?>
<html>
	<head>
		<title>Crawler</title>
		<link type="text/css" href="css\style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/jscript_one.js"></script>
		<link rel="icon" href="images/favicon.png" type="image/icon">
	</head>
	<body class="main">
		<header>
			<div class="logo"><img src="images/logo2.png" alt="LightSearch"></div>
			<h1>Crawler</h1>
		</header>
		<div class="searchsection">
			<form action="urltocrawl.php" method="GET">
				<div class="indexsearch">
					<input id="searchbar" name="urlcrawl" type="urlcrawl" placeholder="Url à crawler..." autocomplete="off" onkeyup="searchWebsite()" value="<?php echo $_GET["search"]?>" autofocus>
					<button onclick="goSearch()">Crawler
						<input type="hidden" id="url" name="url" value="url">
					</button>
				</div>
			</form>
			<?php 
			echo shell_exec('/Users/'.exec(whoami).'/Desktop/LightSearch' );
			echo $_GET["urlcrawl"];
			?>
		</div>
		<div class="credit">
			<a href="index.php">Recherche</a>
		</div>
		
	</body>
</html>